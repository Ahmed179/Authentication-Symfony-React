<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Post;
use App\Entity\User;

/**
 * @Route("/api", name="get-posts")
 */

class PostController extends AbstractController
{
  private $manager;
  private $repository;

  public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator)
  {
    $this->manager    = $manager;
    $this->repository = $manager->getRepository(Post::class);
    $this->validator  = $validator;
  }

  /**
   * @Route("/posts", name="get-posts")
   */
  public function getPosts(Request $request): JsonResponse
  {
    $posts = $this->repository->findAll();
    return new JsonResponse($posts, Response::HTTP_OK);
  }
  /**
   * @Route("/post", name="create-post", methods={"POST"})
   */
  public function createPost(Request $request)
  {
    $data = json_decode($request->getContent(), true);

    $constraints = new Assert\Collection([
      'user_id' =>    [new Assert\NotBlank()],
      'content' =>    [new Assert\NotBlank()],
      'is_private' => [new Assert\NotNull()],
    ]);

    $errors = $this->validator->validate($data, $constraints);
    if (count($errors) > 0) return new Response($errors);

    $user_id =    $data['user_id'];
    $content =    $data['content'];
    $is_private = $data['is_private'];

    $user_repository = $this->manager->getRepository(User::class);
    $user = $user_repository->findOneBy(['id' => $user_id]);

    $post = new Post();
    $post
      ->setUser($user)
      ->setContent($content)
      ->setPrivacy($is_private);

    $this->manager->persist($post);
    $this->manager->flush();

    return new JsonResponse(['status' => 'post added!'], Response::HTTP_OK);
  }

  /**
   * @Route("/post/{id}", name="update-post", methods={"PUT"})
   */
  public function updatePost(Request $request, $id)
  {
    $data = json_decode($request->getContent(), true);

    $constraints = new Assert\Collection([
      'content' => [new Assert\NotBlank()],
      'is_private' => [new Assert\NotNull()],
    ]);

    $errors = $this->validator->validate($data, $constraints);
    if (count($errors) > 0) return new Response($errors);

    $content  = $data['content'];
    $is_private  = $data['is_private'];

    $post = $this->repository->findOneBy(['id' => $id]);
    $post
      ->setContent($content)
      ->setPrivacy($is_private);

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