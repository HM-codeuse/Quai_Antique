<?php

namespace App\Entity;

use App\Repository\OpeningHoursRepository;
use Doctrine\ORM\Mapping as ORM;

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
    private ?string $hourOfOpening = null;

    #[ORM\Column(length: 255)]
    private ?string $hourOfClosing = null;

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

    public function getHourOfOpening(): ?string
    {
        return $this->hourOfOpening;
    }

    public function setHourOfOpening(string $hourOfOpening): self
    {
        $this->hourOfOpening = $hourOfOpening;

        return $this;
    }

    public function getHourOfClosing(): ?string
    {
        return $this->hourOfClosing;
    }

    public function setHourOfClosing(string $hourOfClosing): self
    {
        $this->hourOfClosing = $hourOfClosing;

        return $this;
    }
}
