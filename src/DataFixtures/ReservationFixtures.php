<?php

namespace App\DataFixtures;
use App\DataFixtures\UserFixtures;
use App\DataFixtures\GuestFixtures;
use App\DataFixtures\SlotFixtures;
use App\Entity\Reservation;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ReservationFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $Date = new \DateTime('2023-12-17');
        $reservation = new Reservation();
        $reservation->setDate($Date);
        $reservation->setGuest($this->getReference(GuestFixtures::GUEST_REFERENCE));
        $reservation->setSlot($this->getReference(SlotFixtures::SLOT_REFERENCE));
        $reservation->setUser($this->getReference(UserFixtures::USER_REFERENCE));
        $user = $this->getReference(UserFixtures::USER_REFERENCE);
        $reservation->setEmail($user->getEmail());
        

        $manager->persist($reservation);
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            UserFixtures::class,
            SlotFixtures::class,
            GuestFixtures::class,
        );
    }
}
