<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use League\Fractal\Resource\Collection;
use Pagerfanta\Adapter\ArrayAdapter;
use App\Transformer\PostTransformer;
use League\Fractal\Resource\Item;
use League\Fractal\Manager;
use App\Entity\Post;
use App\Entity\User;
use App\Service\PaginatorService;
use Pagerfanta\Doctrine\Collections\CollectionAdapter;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;




/**
 * @Route("/api", name="get-posts")
 */

class PostController extends AbstractController
{
  private $manager;
  private $repository;
  private $tokenStorage;
  private $fractalManager;
  private $paginatorService;

  public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, TokenStorageInterface $tokenStorage, PaginatorService $paginatorService)
  {
    $this->fractalManager = new Manager();
    $this->tokenStorage = $tokenStorage;
    // $this->fractalManager = $fractalManager;
    $this->manager    = $manager;
    $this->repository = $manager->getRepository(Post::class);
    $this->validator  = $validator;
    $this->paginatorService = $paginatorService;
  }

  /**
   * @Route("/posts", name="get-posts")
   * @param PostTransformer $postTransformer
   */
  public function getPosts(Request $request, PostTransformer $transformer): JsonResponse
  {
    $page = $request->query->get("page");
    $per_page = $request->query->get("per_page");

    $queryBuilder = $this->repository->createQueryBuilder('o')->getQuery();

    $paginator = new Pagerfanta(
      new QueryAdapter($queryBuilder)
    );

    $paginator->setMaxPerPage($per_page);
    $paginator->setCurrentPage($page);

    $pageResults = $this->fractalManager->createData(
      new Collection($paginator->getCurrentPageResults(), $transformer)
    )->toArray();

    $response = [
      'page' => $paginator->getCurrentPage(),
      'total_pages' => $paginator->getNbPages(),
      'total_count' => $paginator->getNbResults(),
      'per_page' => $paginator->getMaxPerPage(),
      'data' => $pageResults,
    ];

    return new JsonResponse($response);
  }

  /**
   * @Route("/post/{id}", name="get-post", methods={"GET"})
   * @param PostTransformer $postTransformer
   */
  public function getPost($id,  PostTransformer $transformer): JsonResponse
  {
    $post = $this->repository->findBy(['id' => $id]);

    $response = $this->fractalManager->createData(
      new Collection($post, $transformer)
    );

    return new JsonResponse($response);
  }

  /**
   * @Route("/post", name="create-post", methods={"POST"})
   * @param PostTransformer $postTransformer
   */
  public function createPost(Request $request, PostTransformer $transformer)
  {
    $user = $this->tokenStorage->getToken()->getUser();
    $data = json_decode($request->getContent(), true);

    $constraints = new Assert\Collection([
      'content' => [new Assert\NotBlank()],
    ]);

    $errors = $this->validator->validate($data, $constraints);
    if (count($errors) > 0) return new Response($errors);

    $content =    $data['content'];

    $user_repository = $this->manager->getRepository(User::class);
    $user = $user_repository->findOneBy(['id' => $user->getId()]);

    $post = new Post();
    $post
      ->setUser($user)
      ->setContent($content);

    $this->manager->persist($post);
    $this->manager->flush();

    $response = $this->fractalManager->createData(
      new Collection([$post], $transformer)
    );

    return new JsonResponse($response, Response::HTTP_OK);
  }

  /**
   * @Route("/post/{id}", name="update-post", methods={"PUT"})
   * @param PostTransformer $postTransformer
   */
  public function updatePost(Request $request, $id, PostTransformer $transformer)
  {
    $data = json_decode($request->getContent(), true);

    $constraints = new Assert\Collection([
      'content'    => [new Assert\NotBlank()],
    ]);

    $errors = $this->validator->validate($data, $constraints);
    if (count($errors) > 0) return new Response($errors);

    $content  = $data['content'];

    $post = $this->repository->findOneBy(['id' => $id]);
    $post
      ->setContent($content);

    $this->manager->persist($post);
    $this->manager->flush();

    $response = $this->fractalManager->createData(
      new Collection([$post], $transformer)
    );

    return new JsonResponse($response, Response::HTTP_OK);
  }

  /**
   * @Route("/post/{id}", name="delete-post", methods={"DELETE"})
   */
  public function deletePost($id): JsonResponse
  {
    $post = $this->repository->findOneBy(['id' => $id]);
    $this->manager->remove($post);
    $this->manager->flush();
    return new JsonResponse(['status' => 'Post deleted!'], Response::HTTP_OK);
  }
}