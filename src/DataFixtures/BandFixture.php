<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BandFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $king = new Band();
        $king->setName("OnekujoPorcento")
        ->setStyle("Hard pop")
        ->addMember("");

        $manager->flush();
    }


}
