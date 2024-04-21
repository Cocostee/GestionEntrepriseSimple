<?php

namespace App\CRM\Entity;

use App\Repository\CrmDevisRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DevisRepository::class)]
class CrmDevis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $Numero = null;

    #[ORM\Column(length: 50)]
    private ?string $DateCreation = null;

    #[ORM\Column(length: 50)]
    private ?string $DateExpiration = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $Montant = null;

    #[ORM\Column]
    private ?int $IDStatus = null;

    #[ORM\Column]
    private ?int $IDClient = null;

    #[ORM\Column]
    private ?int $IDResponsable = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?string
    {
        return $this->Numero;
    }

    public function setNumero(string $Numero): static
    {
        $this->Numero = $Numero;

        return $this;
    }

    public function getDateCreation(): ?string
    {
        return $this->DateCreation;
    }

    public function setDateCreation(string $DateCreation): static
    {
        $this->DateCreation = $DateCreation;

        return $this;
    }

    public function getDateExpiration(): ?string
    {
        return $this->DateExpiration;
    }

    public function setDateExpiration(string $DateExpiration): static
    {
        $this->DateExpiration = $DateExpiration;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->Montant;
    }

    public function setMontant(string $Montant): static
    {
        $this->Montant = $Montant;

        return $this;
    }

    public function getIDStatus(): ?int
    {
        return $this->IDStatus;
    }

    public function setIDStatus(int $IDStatus): static
    {
        $this->IDStatus = $IDStatus;

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
