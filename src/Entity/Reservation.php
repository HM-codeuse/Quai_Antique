<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $time = null;

    #[ORM\OneToMany(mappedBy: 'reservation', targetEntity: Table::class)]
    private Collection $table_id;

    #[ORM\ManyToOne(inversedBy: 'reservations')]
    private ?User $user_id = null;

    public function __construct()
    {
        $this->table_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
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

    /**
     * @return Collection<int, Table>
     */
    public function getTableId(): Collection
    {
        return $this->table_id;
    }

    public function addTableId(Table $tableId): self
    {
        if (!$this->table_id->contains($tableId)) {
            $this->table_id->add($tableId);
            $tableId->setReservation($this);
        }

        return $this;
    }

    public function removeTableId(Table $tableId): self
    {
        if ($this->table_id->removeElement($tableId)) {
            // set the owning side to null (unless already changed)
            if ($tableId->getReservation() === $this) {
                $tableId->setReservation(null);
            }
        }

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
