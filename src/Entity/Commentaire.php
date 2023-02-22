<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateCommentaire = null;
    //#[ORM\Column(type: Types::DATE_MUTABLE)]
    //8private ?\DateTimeInterface $descriptionCommentaire = null;

  

    #[ORM\ManyToOne(inversedBy: 'commentaires')]
    private ?Article $article = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $descriptionCommentaire = null;

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateCommentaire(): ?\DateTimeInterface
    {
        return $this->dateCommentaire;
    }

    public function setDateCommentaire(\DateTimeInterface $dateCommentaire): self
    {
        $this->dateCommentaire = $dateCommentaire;

        return $this;
    }

   
    

    public function getArticle(): ?Article
    {
        return $this->article;
    }

    public function setArticle(?Article $article): self
    {
        $this->article = $article;

        return $this;
    }

    public function getDescriptionCommentaire(): ?string
    {
        return $this->descriptionCommentaire;
    }

    public function setDescriptionCommentaire(string $descriptionCommentaire): self
    {
        $this->descriptionCommentaire = $descriptionCommentaire;

        return $this;
    }
}
