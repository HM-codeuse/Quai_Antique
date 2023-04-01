<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Menu;

class MenuTest extends TestCase
{
    public function testIsTrue()
    {
        $menu = new Menu();
        $menu->setName('name')
             ->setPrice(15.50)
             ->setDescription('A description of the menu');

        $this->assertTrue($menu->getName () === 'name');
        $this->assertTrue($menu->getPrice() === 15.50);
        $this->assertTrue($menu->getDescription() === 'A description of the menu');


    }

    public function testIsFalse()
    {
        $menu = new Menu();
        $menu->setName('name')
             ->setPrice(15.50)
             ->setDescription('A description of the menu');

             $this->assertFalse($menu->getName () === 'false');
             $this->assertFalse($menu->getPrice() == 16.50);
             $this->assertFalse($menu->getDescription() === 'false');


    }

    public function testIsEmpty()
    {
        $menu = new Menu();

        $menu->setName('')
             ->setPrice(0.0)
             ->setDescription('');


        $this->assertEmpty($menu->getName());
        $this->assertEmpty($menu->getPrice());
        $this->assertEmpty($menu->getDescription());


    }
}
