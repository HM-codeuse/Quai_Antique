<?php

namespace App\Tests;

use App\Entity\OpeningHours;
use PHPUnit\Framework\TestCase;

class OpeningHoursTest extends TestCase
{
    public function testisTrue()
    {
        $Openinghours = new OpeningHours();
        $Openinghours->setDayOfTheWeek('Jour');
        $Openinghours->setHourOfOpening('Heure ouverture');
        $Openinghours->setHourOfClosing('Heure fermeture');

        $this->assertTrue($Openinghours->getDayOfTheWeek() === 'Jour');
        $this->assertTrue($Openinghours->getHourOfOpening() === 'Heure ouverture');
        $this->assertTrue($Openinghours->getHourOfClosing() === 'Heure fermeture');


    }

    public function testisFalse()
    {
        $Openinghours = new OpeningHours();
        $Openinghours->setDayOfTheWeek('Jour');
        $Openinghours->setHourOfOpening('Heure ouverture');
        $Openinghours->setHourOfClosing('Heure fermeture');

        $this->assertFalse($Openinghours->getDayOfTheWeek() === 'False');
        $this->assertFalse($Openinghours->getHourOfOpening() === 'False');
        $this->assertFalse($Openinghours->getHourOfClosing() === 'False');
        
    }

 public function testisEmpty()
    {
        $Openinghours = new OpeningHours();
        $Openinghours->setDayOfTheWeek('');
        $Openinghours->setHourOfOpening('');
        $Openinghours->setHourOfClosing('');

        $this->assertEmpty($Openinghours->getDayOfTheWeek());
        $this->assertEmpty($Openinghours->getHourOfOpening());
        $this->assertEmpty($Openinghours->getHourOfClosing());


    }
}
