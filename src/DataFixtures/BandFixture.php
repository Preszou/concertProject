<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Band;

class BandFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $king = new Band();
        $king->setName("OnekujoPorcento")
        ->setMembersNumber(1)
        ->setStyle("Hard pop")
        ->setPicture("jojo.webp")
        ->setPictureS("jojo.webp");

        $manager->persist($king);
        $manager->flush();
    }


}
