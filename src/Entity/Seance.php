<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    #[ORM\Column]
    private ?int $duree = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $bassin = null;

    #[ORM\Column]
    private ?int $distanceTotale = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): static
    {
        $this->duree = $duree;

        return $this;
    }

    public function getBassin(): ?string
    {
        return $this->bassin;
    }

    public function setBassin(?string $bassin): static
    {
        $this->bassin = $bassin;

        return $this;
    }

    public function getDistanceTotale(): ?int
    {
        return $this->distanceTotale;
    }

    public function setDistanceTotale(int $distanceTotale): static
    {
        $this->distanceTotale = $distanceTotale;

        return $this;
    }
}
