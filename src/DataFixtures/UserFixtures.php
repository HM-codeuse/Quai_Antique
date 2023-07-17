<?php
namespace App\DataFixtures;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{   
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public const USER_REFERENCE = 'user-john';
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $password = $this->hasher->hashPassword($user, 'fixtures');
        $user->setUsername("Fixtures");
        $user->setFirstName("John");
        $user->setEmail("john@fixtures.com");
        $user->setRoles(["ROLE_USER"]);
        $user->setPassword($password); 

        $this->addReference(self::USER_REFERENCE, $user);
        
        $manager->persist($user);
        $manager->flush();
    }
}