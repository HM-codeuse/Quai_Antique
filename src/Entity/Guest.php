<?php

namespace App\Entity;

use App\Repository\GuestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: GuestRepository::class)]
#[ORM\Table(name: '`guest`')]
class Guest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numberOfSettings;

    #[ORM\OneToMany(mappedBy: 'guest', targetEntity: Reservation::class)]
    private Collection $reservation;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

    public function __toString()
    {
        return 'Table de '. $this->getNumberOfSettings().' personnes';
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberOfSettings(): ?int
    {
        return $this->numberOfSettings;
    }

    public function setNumberOfSettings(int $numberOfSettings): self
    {
        $this->numberOfSettings = $numberOfSettings;

        return $this;
    }

    /**
     * @return Collection<int, reservation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(reservation $reservation): static
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation->add($reservation);
          //  $reservation->setGuest($this);
        }

        return $this;
    }

    public function removeReservation(reservation $reservation): static
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getGuest() === $this) {
              //  $reservation->setGuest(null);
            }
        }

        return $this;
    }


}
