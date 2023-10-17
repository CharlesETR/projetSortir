<?php

namespace App\Entity;

use App\Repository\CampusEntityRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CampusEntityRepository::class)]
class CampusEntity
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idCampus = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCampus(): ?int
    {
        return $this->idCampus;
    }

    public function setIdCampus(int $idCampus): static
    {
        $this->idCampus = $idCampus;

        return $this;
    }

}
