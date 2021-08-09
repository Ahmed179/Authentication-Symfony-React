<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

/**
 * @Route("/api/user", name="user")
 */
class UserController extends AbstractController
{
    private $manager;
    private $repository;
    private $jwtManager;


    public function __construct(EntityManagerInterface $manager, ValidatorInterface $validator, JWTTokenManagerInterface $jwtManager)
    {
        $this->manager = $manager;
        $this->jwtManager = $jwtManager;
        $this->repository = $manager->getRepository(User::class);
        $this->validator  = $validator;
    }

    /**
     * @Route("/signup", name="signup", methods={"POST"})
     */
    public function signUp(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $constraints = new Assert\Collection([
            'username' => [new Assert\NotBlank()],
            'password' => [new Assert\NotBlank()],
        ]);

        $errors = $this->validator->validate($data, $constraints);
        if (count($errors) > 0) return new Response($errors);

        $username = $data['username'];
        $password = $data['password'];

        $user = $this->repository->findOneBy(["username" => $username]);
        if ($user) return new Response("User already exists", Response::HTTP_BAD_REQUEST);

        $hashed_password = password_hash(
            $password,
            PASSWORD_BCRYPT
        );

        $user = new User();
        $user
            ->setUsername($username)
            ->setPassword($hashed_password)
            ->setRoles(['USER_ROLE']);

        $this->manager->persist($user);
        $this->manager->flush();

        return new JsonResponse($user, Response::HTTP_OK);
    }

    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $constraints = new Assert\Collection([
            'username' => [new Assert\NotBlank()],
            'password' => [new Assert\NotBlank()],
        ]);

        $errors = $this->validator->validate($data, $constraints);
        if (count($errors) > 0) return new Response($errors);

        $username = $data['username'];
        $password = $data['password'];

        $user = $this->repository->findOneBy(["username" => $username]);
        if (!$user) return new JsonResponse("Invalid Username", Response::HTTP_NOT_FOUND);

        $is_password_correct = password_verify($password, $user->getPassword());
        if (!$is_password_correct) return new JsonResponse("Invalid password", Response::HTTP_BAD_REQUEST);

        $token = $this->jwtManager->create($user);
        $response = [
            "token" => $token,
            "user" => $user
        ];
        return new JsonResponse($response, Response::HTTP_OK);
    }

    /**
     * @Route("/user/{id}", name="delete-user", methods={"DELETE"})
     */
    public function deleteUser($id): JsonResponse
    {
        $user = $this->repository->findOneBy(['id' => $id]);
        $this->manager->remove($user);
        $this->manager->flush();
        return new JsonResponse(['status' => 'User deleted!'], Response::HTTP_OK);
    }
}