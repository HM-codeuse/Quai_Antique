<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Dish;

class DishTest extends TestCase
{
    public function testIsTrue()
    {
        $dish = new Dish();

        $dish->setName('nom')
             ->setPrice(15.50)
             ->setDescription('Une description du plat')
             ->setFile('Nom du fichier');

        $this->assertTrue($dish->getName()==='nom');
        $this->assertTrue($dish->getPrice()===15.50);
        $this->assertTrue($dish->getDescription()==='Une description du plat');
        $this->assertTrue($dish->getFile()==='Nom du fichier');

    }

    public function testIsFalse()
    {
        $dish = new Dish();

        $dish->setName('nom')
             ->setPrice(15.50)
             ->setDescription('Une description du plat')
             ->setFile('Nom du fichier');

        $this->assertFalse($dish->getName()==='false');
        $this->assertFalse($dish->getPrice()===10.50);
        $this->assertFalse($dish->getDescription()==='false');
        $this->assertFalse($dish->getFile()==='false');

    }

    public function testIsEmpty()
    {
        $dish = new Dish();

        $dish->setName('')
             ->setPrice(0.0)
             ->setDescription('')
             ->setFile('');

        $this->assertEmpty($dish->getName());
        $this->assertEmpty($dish->getPrice());
        $this->assertEmpty($dish->getDescription());
        $this->assertEmpty($dish->getFile());

    }
}

