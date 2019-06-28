<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setEmail('chrislebaron+admin@gmail.com');
        $admin->setPassword($this->passwordEncoder->encodePassword($admin, 'AdminPassword'));
        $admin->setRoles(array('ROLE_ADMIN'));

        $manager->persist($admin);

        $user = new User();
        $user->setEmail('chrislebaron+user@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword($user, 'UserPassword'));
        $user->setRoles(array('ROLE_USER'));

        $manager->persist($user);

        $manager->flush();
    }
}
