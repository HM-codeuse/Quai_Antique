<?php

namespace App\Entity;

use App\Repository\SlotRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SlotRepository::class)]
class Slot
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $time = null;

    #[ORM\OneToMany(targetEntity:Reservation::class, mappedBy: 'slot',  cascade: ['persist', 'remove'])]
    private Collection $reservation;


    public function __toString(): string
    {
        return $this->getTime() ? $this->getTime()->format('H:i') : '';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function setReservation(Reservation $reservation): self
    {
        // set the owning side of the relation if necessary

        if ($reservation->getSlot() !== $this) {
            $reservation->setSlot($this);
        }

        $this->reservation = $reservation;

        return $this;
    }

}
