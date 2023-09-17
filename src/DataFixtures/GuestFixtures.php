<?php

namespace App\DataFixtures;

use App\Entity\Guest;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class GuestFixtures extends Fixture
{
    public const GUEST_REFERENCE = 'guest-fixtures';
    public function load(ObjectManager $manager)
    {
        $guest = new Guest();
        $guest->setNumberOfSettings(7);

        $manager->persist($guest);
        $manager->flush();

        $this->addReference(self::GUEST_REFERENCE, $guest);
    }
}