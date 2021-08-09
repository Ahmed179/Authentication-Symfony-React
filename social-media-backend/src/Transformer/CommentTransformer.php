<?php

namespace App\Transformer;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use League\Fractal\TransformerAbstract;

class CommentTransformer extends TransformerAbstract
{

  public function transform(Comment $comment): array
  {
    return [
      'id'            => (int) $comment->id,
      'user'          =>       $comment->users,
      'content'       =>       $comment->comment_content,
    ];
  }
}