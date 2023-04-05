<?php

namespace App\Tests;

use App\Entity\Reservation;
use App\Entity\Table;
use App\Entity\User;
use DateTime;
use PHPUnit\Framework\TestCase;

class ReservationTest extends TestCase
{
    public function testIsTrue()
    {
        $reservation = new Reservation();
        $date = new DateTime();
        $time = new DateTime();
      # $table = new Table();
        $user = new User();


        $reservation->setDate($date);
        $reservation->setTime($time);
       # $reservation->setTable_id($table);
        $reservation->setUserId($user);

        $this->assertTrue($reservation->getDate()===$date);
        $this->assertTrue($reservation->getTime()===$time);
        $this->assertTrue($reservation->getUserId()===$user);

    
    }

    public function testIsFalse()
    {
        $reservation = new Reservation();
        $date = new DateTime();
        $time = new DateTime();
      # $table = new Table();
        $user = new User();


        $reservation->setDate($date);
        $reservation->setTime($time);
       # $reservation->setTable_id($table);
        $reservation->setUserId($user);

        $this->assertFalse($reservation->getDate()=== new DateTime());
        $this->assertFalse($reservation->getTime()=== new DateTime());
        $this->assertFalse($reservation->getUserId()=== new User());

    
    }

    public function testIsEmpty()
    {
        $reservation = new Reservation();

        $this->assertEmpty($reservation->getDate());
        $this->assertEmpty($reservation->getTime());
        $this->assertEmpty($reservation->getUserId());

    
    }
}
