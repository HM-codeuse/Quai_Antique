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
    private ?Date $dayOfTheWeek = null;

    #[ORM\Column(length: 255)]
    private ?DateTime $hourOfOpening = null;

    #[ORM\Column(length: 255)]
    private ?DateTime $hourOfClosing = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDayOfTheWeek(): ?date
    {
        return $this->dayOfTheWeek;
    }

    public function setDayOfTheWeek(date $dayOfTheWeek): self
    {
        $this->dayOfTheWeek = $dayOfTheWeek;

        return $this;
    }

    public function getHourOfOpening(): ?datetime
    {
        return $this->hourOfOpening;
    }

    public function setHourOfOpening(datetime $hourOfOpening): self
    {
        $this->hourOfOpening = $hourOfOpening;

        return $this;
    }

    public function getHourOfClosing(): ?datetime
    {
        return $this->hourOfClosing;
    }

    public function setHourOfClosing(datetime $hourOfClosing): self
    {
        $this->hourOfClosing = $hourOfClosing;

        return $this;
    }
}
