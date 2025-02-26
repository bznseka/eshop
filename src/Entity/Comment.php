<?php

namespace App\Entity;

use App\Repository\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentRepository::class)]
class Comment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $message = null;

    #[ORM\Column(nullable: true)]
    private ?bool $createdAt = null;

    #[ORM\ManyToOne(inversedBy: 'comments')]
    private ?Product $relation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function isCreatedAt(): ?bool
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?bool $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getRelation(): ?Product
    {
        return $this->relation;
    }

    public function setRelation(?Product $relation): static
    {
        $this->relation = $relation;

        return $this;
    }
}
