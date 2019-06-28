<?php

namespace App\DataFixtures;

use App\Entity\Hospital;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $hospital = new Hospital();
        $hospital->setName('Primary Childrens Hospital');
        $hospital->setPhoneNumber('(801) 662-1000');
        $hospital->setAddress('100 Mario Capecchi Dr, Salt Lake City, UT 84113');

        $manager->persist($hospital);
        $manager->flush();
    }
}
