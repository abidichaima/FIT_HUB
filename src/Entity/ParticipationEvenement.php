<?php

namespace App\Entity;

use App\Repository\ParticipationEventRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ParticipationEventRepository::class)]
class ParticipationEvent
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateInscriptionEvent = null;

    #[ORM\Column(length: 255)]
    private ?string $statutParticipation = null;

    #[ORM\ManyToOne(inversedBy: 'participation')]
    private ?Event $event = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateInscriptionEvent(): ?\DateTimeInterface
    {
        return $this->dateInscriptionEvent;
    }

    public function setDateInscriptionEvent(\DateTimeInterface $dateInscriptionEvent): self
    {
        $this->dateInscriptionEvent = $dateInscriptionEvent;

        return $this;
    }

    public function getStatutParticipation(): ?string
    {
        return $this->statutParticipation;
    }

    public function setStatutParticipation(string $statutParticipation): self
    {
        $this->statutParticipation = $statutParticipation;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }
}
