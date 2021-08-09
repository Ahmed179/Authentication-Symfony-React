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
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use League\Fractal\Resource\Collection;
use App\Transformer\PostTransformer;
use League\Fractal\Resource\Item;
use App\Service\PostService;
use League\Fractal\Manager;
use App\Entity\Post;
use App\Entity\User;


/**
 * @Route("/api", name="get-posts")
 */

class PostController extends AbstractController
{
  private $manager;
  private $repository;
  private $tokenStorage;
  private $fractalManager;

  public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, TokenStorageInterface $tokenStorage)
  {
    $this->fractalManager = new Manager();
    $this->tokenStorage = $tokenStorage;
    // $this->fractalManager = $fractalManager;
    $this->manager    = $manager;
    $this->repository = $manager->getRepository(Post::class);
    $this->validator  = $validator;
  }

  /**
   * @Route("/posts", name="get-posts")
   * @param PostTransformer $postTransformer
   */
  public function getPosts(Request $request, PostTransformer $postTransformer, PostService $query): JsonResponse
  {
    // $posts = $query->ReturnData($request);
    // return new JsonResponse([
    //   "items" => $posts->getItems(),
    //   "meta" => $posts->getPaginationData(),
    // ]);

    return new JsonResponse($this->fractalManager->createData(
      new Collection($this->repository->findAll(), $postTransformer)
    )->toArray());
  }
  /**
   * @Route("/post", name="create-post", methods={"POST"})
   */
  public function createPost(Request $request)
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

    return new JsonResponse(['status' => 'Post added!'], Response::HTTP_OK);
  }

  /**
   * @Route("/post/{id}", name="update-post", methods={"PUT"})
   */
  public function updatePost(Request $request, $id)
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

    return new JsonResponse(['status' => 'Post updated!'], Response::HTTP_OK);
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