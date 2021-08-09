<?php

namespace App\Entity;

use App\Repository\PostRepository;
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
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="posts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $content;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $is_private;

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

    public function jsonSerialize()
    {
        return [
            "id" => $this->id,
            "content" => $this->content,
            "user" => $this->user,
            "is_private" => $this->is_private
        ];
    }
}