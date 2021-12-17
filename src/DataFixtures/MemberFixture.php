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

      $this->addMember(self::TEST, $aly);
      
      $manager->persist($aly);
      $manager->flush();

      $fre = new Members();
      $fre->setFirstName("Freddy")
      ->setLastName("Mercury")
      ->setRole("Chanteur");
      $manager->persist($fre);
      $manager->flush();

      $joe = new Members();
      $joe->setFirstName("Joe")
      ->setLastName("Satriani")
      ->setRole("Guitariste");
      $manager->persist($joe);
      $manager->flush();


    }
}
