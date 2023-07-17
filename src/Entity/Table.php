<?php

namespace App\Entity;

use App\Repository\TableRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TableRepository::class)]
#[ORM\Table(name: '`table`')]
class Table
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $status = null;

    #[ORM\Column]
    private ?int $numberOfSettings;

    public function __toString()
    {
        return 'Table n°'. $this->getId().' de '. $this->getNumberOfSettings().' personnes';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getNumberOfSettings(): ?string
    {
        return $this->numberOfSettings;
    }

    public function setNumberOfSettings(string $numberOfSettings): self
    {
        $this->numberOfSettings = $numberOfSettings;

        return $this;
    }


}
