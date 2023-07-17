<?php

namespace App\DataFixtures;

use App\Entity\Table;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TableFixtures extends Fixture
{
    public const TABLE_REFERENCE = 'table-fixtures';
    public function load(ObjectManager $manager)
    {
        $table = new Table();
        $table->setStatus("True");
        $table->setNumberOfSettings(2);

        $manager->persist($table);
        $manager->flush();

        $this->addReference(self::TABLE_REFERENCE, $table);
    }
}