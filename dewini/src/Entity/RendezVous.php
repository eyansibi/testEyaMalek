<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $id_rendezvous = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateRDV = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdRendezvous(): ?string
    {
        return $this->id_rendezvous;
    }

    public function setIdRendezvous(string $id_rendezvous): static
    {
        $this->id_rendezvous = $id_rendezvous;

        return $this;
    }

    public function getDateRDV(): ?\DateTimeInterface
    {
        return $this->dateRDV;
    }

    public function setDateRDV(\DateTimeInterface $dateRDV): static
    {
        $this->dateRDV = $dateRDV;

        return $this;
    }
}
