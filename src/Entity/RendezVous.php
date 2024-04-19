<?php

namespace App\Entity;

use App\Repository\RendezVousRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RendezVousRepository::class)]
class RendezVous
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Date = null;

    #[ORM\Column(length: 100)]
    private ?string $Lieu = null;

    #[ORM\Column(length: 100)]
    private ?string $Object = null;

    #[ORM\Column]
    private ?int $IDClient = null;

    #[ORM\Column]
    private ?int $IDResponsable = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?string
    {
        return $this->Date;
    }

    public function setDate(string $Date): static
    {
        $this->Date = $Date;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->Lieu;
    }

    public function setLieu(string $Lieu): static
    {
        $this->Lieu = $Lieu;

        return $this;
    }

    public function getObject(): ?string
    {
        return $this->Object;
    }

    public function setObject(string $Object): static
    {
        $this->Object = $Object;

        return $this;
    }

    public function getIDClient(): ?int
    {
        return $this->IDClient;
    }

    public function setIDClient(int $IDClient): static
    {
        $this->IDClient = $IDClient;

        return $this;
    }

    public function getIDResponsable(): ?int
    {
        return $this->IDResponsable;
    }

    public function setIDResponsable(int $IDResponsable): static
    {
        $this->IDResponsable = $IDResponsable;

        return $this;
    }
}
