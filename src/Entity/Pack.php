<?php

namespace App\Entity;

use App\Repository\PackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;




#[ORM\Entity(repositoryClass: PackRepository::class)]
class Pack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("pack_group")]
    private ?int $id = null;

    #[Assert\NotBlank(message:"saisir le nom")]
    #[ORM\Column(length: 255)]
    #[Groups("pack_group")]
    private ?string $nomPack = null;

    #[Assert\NotBlank(message:"saisir le prix")]
    #[Assert\Positive(message:"saisir un prix positif")]
    #[ORM\Column]
    #[Groups("pack_group")]
    private ?float $prixPack = null;

    #[Assert\NotBlank(message:"saisir la duree")]
    #[Assert\Positive(message:"saisir une duree positif")]
    #[ORM\Column]
    #[Groups("pack_group")]
    private ?int $dureePack = null;
   

    #[ORM\OneToMany(mappedBy: 'pack', targetEntity: Abonnement::class,cascade: ["remove"])]
    private Collection $abonnements;

    public function __construct()
    {
        $this->abonnements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPack(): ?string
    {
        return $this->nomPack;
    }

    public function setNomPack(string $nomPack): self
    {
        $this->nomPack = $nomPack;

        return $this;
    }

    public function getPrixPack(): ?float
    {
        return $this->prixPack;
    }

    public function setPrixPack(float $prixPack): self
    {
        $this->prixPack = $prixPack;

        return $this;
    }

    public function getDureePack(): ?int
    {
        return $this->dureePack;
    }

    public function setDureePack(int $dureePack): self
    {
        $this->dureePack = $dureePack;

        return $this;
    }
     public function __toString():string{
        return $this->nomPack;
     }

    /**
     * @return Collection<int, Abonnement>
     */
    public function getAbonnements(): Collection
    {
        return $this->abonnements;
    }

    public function addAbonnement(Abonnement $abonnement): self
    {
        if (!$this->abonnements->contains($abonnement)) {
            $this->abonnements->add($abonnement);
            $abonnement->setPack($this);
        }

        return $this;
    }

    public function removeAbonnement(Abonnement $abonnement): self
    {
        if ($this->abonnements->removeElement($abonnement)) {
             //set the owning side to null (unless already changed)
            if ($abonnement->getPack() === $this) {
                $abonnement->setPack(null);
            }
        }

        return $this;
    }
}
