<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Band;

class BandFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $b1 = new Band();
        $b1->setName('Imagine Dragons')
            ->setStyle('Pop Rock')
            ->setPicture('ID.jpg')
            ->setCreationYear(new \DateTime(1993))
            ->setLastAlbumName('Mercury')
            ->addMember($this->getReference(MemberFixtures::ID1))
            ->addMember($this->getReference(MemberFixtures::ID2))
            ->addMember($this->getReference(MemberFixtures::ID3))
            ->addMember($this->getReference(MemberFixtures::ID4));
        $manager->persist($b1);



        $m1 = new Band();
        $m1->setName('Muse')
        ->setStyle('Rock Alternatif')
        ->setPicture('Muse.jpg')
        ->setCreationYear(new \DateTime(1994))
        ->setLastAlbumName('Simulation Theory')
        ->addMember($this->getReference(MemberFixtures::M1))
        ->addMember($this->getReference(MemberFixtures::M2))
        ->addMember($this->getReference(MemberFixtures::M3));

        $manager->persist($m1);
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            MemberFixtures::class,
        );
    }
}
