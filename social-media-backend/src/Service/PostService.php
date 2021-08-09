<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use Psr\Container\ContainerInterface;
use App\Entity\Post;

class PostService
{
  protected $manager;
  protected $container;

  public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container)
  {
    $this->manager = $entityManager;
    $this->container = $container;
  }

  public function ReturnData($request)
  {
    $manager = $this->manager;
    $container = $this->container;
    $query = $manager->createQuery('
                    SELECT 
                        t.id,
                        t.content
                    FROM 
                        App\Entity\Post t
                    ');
    //$result=$query->execute();
    $pagenator = $container->get('knp_paginator');
    $results = $pagenator->paginate(
      $query,
      $request->query->getInt('page', 1),
      $request->query->getInt('limit', 5)
    );
    return ($results);
  }
}