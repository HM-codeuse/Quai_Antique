<?php

namespace App\Entity;

use App\Repository\OpeningHoursRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

#[ORM\Entity(repositoryClass: OpeningHoursRepository::class)]
class OpeningHours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $dayOfTheWeek = null;

    #[ORM\Column(length: 255)]
    private ?string $lunchService = null;

    #[ORM\Column(length: 255)]
    private ?string $eveningService = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayOfTheWeek(): ?string
    {
        return $this->dayOfTheWeek;
    }

    public function setDayOfTheWeek(string $dayOfTheWeek): self
    {
        $this->dayOfTheWeek = $dayOfTheWeek;

        return $this;
    }

    public function getLunchService(): ?string
    {
        return $this->lunchService;
    }

    public function setLunchService(string $lunchService): self
    {
        $this->lunchService = $lunchService;

        return $this;
    }

    public function getEveningService(): ?string
    {
        return $this->eveningService;
    }

    public function setEveningService(string $eveningService): self
    {
        $this->eveningService = $eveningService;

        return $this;
    }
}
