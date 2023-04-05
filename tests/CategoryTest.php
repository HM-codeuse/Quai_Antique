<?php

namespace App\Tests;

use App\Entity\Category;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    public function testIsTrue()
    {
        $category = new Category();
        $category->setName('Nom');
        $this->assertTrue($category->getName()=== 'Nom');

    }

    public function testIsFalse()
    {
        $category = new Category();
        $category->setName('Nom');
        $this->assertFalse($category->getName()=== 'False');

    }

    public function testIsEmpty()
    {
        $category = new Category();
        $category->setName('');
        $this->assertEmpty($category->getName());

    }
}
