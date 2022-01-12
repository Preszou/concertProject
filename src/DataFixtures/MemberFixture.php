<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Members;

class MemberFixture extends Fixture
{

    public const TEST = 'Alyzée';
    public function load(ObjectManager $manager): void
    {
      $aly = new Members();
      $aly->setFirstName("Alyzée")
      ->setLastName("Auchan")
      ->setRole("Guitariste");

      $manager->persist($aly);
      $manager->flush();


    }
}
