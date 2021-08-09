<?php

namespace App\Transformer;

use App\Entity\Post;
use App\Entity\Comment;
use League\Fractal;

class PostTransformer extends Fractal\TransformerAbstract
{

  /**
   *
   * @var array
   */
  protected $defaultIncludes = [
    'comments'
  ];

  public function transform(Post $post)
  {
    return   [
      'id'                => (int) $post->getId(),
      'content'           =>       $post->getContent(),
      'user'              =>       $post->getUser(),
      'is_private'        =>       $post->getPrivacy(),
    ];
  }

  public function includeComments(Post $post)
  {
    $comments = $post->comments;
    return $this->collection($comments, new CommentTransformer);
  }
}