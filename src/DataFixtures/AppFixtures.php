<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder){

        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {
        //Utilisation de Faker
       $faker= Factory::create('fr_FR');

        //Création d'un user
        $user = new User();

        $user->setEmail('user@test.com')
             ->setFirstname($faker->firstName())
             ->setUsername($faker->firstName());

        $password = $this->encoder->hashPassword($user, 'password');
        $user->setPassword($password);

        $manager->persist($user);

        $manager->flush();
    }
}
