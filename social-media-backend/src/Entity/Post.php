<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;


/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post implements JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    public $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    public $content;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_private;

    /**
     * @ORM\OneToMany(targetEntity=Comment::class, mappedBy="post", cascade={"remove"})
     */
    public $comments;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPrivacy(): ?bool
    {
        return $this->is_private;
    }

    public function setPrivacy(?bool $is_private): self
    {
        $this->is_private = $is_private;

        return $this;
    }
    /**
     * @return Collection|Comment[]
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments[] = $comment;
            $comment->setPost($this);
        }

        return $this;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getPost() === $this) {
                $comment->setPost(null);
            }
        }

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            "id" => $this->id,
            "content" => $this->content,
            "comments" => $this->comments,
            "user" => $this->user,
            "is_private" => $this->is_private
        ];
    }
}