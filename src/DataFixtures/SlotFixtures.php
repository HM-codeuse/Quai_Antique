<?php

namespace App\DataFixtures;

use App\Entity\Slot;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SlotFixtures extends Fixture
{
    public const SLOT_REFERENCE = 'slot-fixtures';
    public function load(ObjectManager $manager)
    {
        $slot = new Slot();
        $time=new \DateTime();
        $time->setTime(16, 30);
        $slot->setTime($time);

        $this->addReference(self::SLOT_REFERENCE, $slot);

        $manager->persist($slot);
        $manager->flush();
    }
}