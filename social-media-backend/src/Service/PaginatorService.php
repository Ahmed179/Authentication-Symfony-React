<?php

namespace App\Service;

use League\Fractal;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Exception\OutOfRangeCurrentPageException;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;

class PaginatorService
{

  public function getPaginated(int $page, int $perPage, Query $query, Fractal\TransformerAbstract $transformer = null, array $includes = []): array
  {
    $adapter = new QueryAdapter($query, true, false);
    $paginator = new Pagerfanta($adapter);
    $paginator->setMaxPerPage($perPage);
    try {
      if ($page > $paginator->getNbPages()) {
        $paginator->setCurrentPage(1);
      } else {
        $paginator->setCurrentPage($page);
      }
    } catch (OutOfRangeCurrentPageException $e) {
      throw new BadRequestHttpException($e->getMessage());
    }

    $pageResults = $transformer
      ? $this->transformData($paginator->getCurrentPageResults(), $transformer, $includes)
      : iterator_to_array($paginator->getCurrentPageResults());

    return [
      'page' => $paginator->getCurrentPage(),
      'per_page' => $paginator->getMaxPerPage(),
      'total_pages' => $paginator->getNbPages(),
      'total_count' => $paginator->getNbResults(),
      'data' => $pageResults,
    ];
  }
}