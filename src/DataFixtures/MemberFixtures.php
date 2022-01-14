<?php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Member;

/**
 * Class MemberFixtures
 * @package App\DataFixtures
 */
class MemberFixtures extends Fixture
{
    public const ID1 = 'a1';
    public const ID2 = 'a2';
    public const ID3 = 'a3';
    public const ID4 = 'a4';

    public const M1 = 'm1';
    public const M2 = 'm2';
    public const M3 = 'm3';

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $a1 = new Member();
        $a1->setName('Reynolds')
            ->setFirstName('Dan')
            ->setjob('Chanteur')
            ->setBirthDate(\DateTime::createFromFormat("d/m/Y", '14/07/1987'))
            ->setPicture('danReynolds.jpg');
        $manager->persist($a1);

        $a2 = new Member();
        $a2->setName('Wayne Sermon')
            ->setFirstName('Daniel')
            ->setjob('Guitariste')
            ->setBirthDate(\DateTime::createFromFormat("d/m/Y", '15/06/1984'))
            ->setPicture('danielWayneSermon.jpg');
        $manager->persist($a2);

        $a3 = new Member();
        $a3->setName('Platzman')
            ->setFirstName('Dan')
            ->setjob('Batteur')
            ->setBirthDate(\DateTime::createFromFormat("d/m/Y", '28/09/1986'))
            ->setPicture('jamesShaffer.jpg');
        $manager->persist($a3);

        $a4 = new Member();
        $a4->setName('McKee')
            ->setFirstName('Ben')
            ->setjob('Bassiste')
            ->setBirthDate(\DateTime::createFromFormat("d/m/Y", '07/04/1985'))
            ->setPicture('brianWelch.jpg');
        $manager->persist($a4);


        $m1 = new Member();
        $m1->setName('Wolstenholme')
            ->setFirstName('Christopher')
            ->setjob('Bassiste')
            ->setBirthDate(\DateTime::createFromFormat("d/m/Y", '02/12/1978'))
            ->setPicture('chrisWolsten.jpg');
        $manager->persist($m1);

        $m2 = new Member();
        $m2->setName('Howard')
            ->setFirstName('Dominic')
            ->setjob('Batteur')
            ->setBirthDate(\DateTime::createFromFormat("d/m/Y", '07/12/1977'))
            ->setPicture('domHoward.jpg');
        $manager->persist($m2);

        $m3 = new Member();
        $m3->setName('Bellamy')
            ->setFirstName('Matthew')
            ->setjob('Chanteur')
            ->setBirthDate(\DateTime::createFromFormat("d/m/Y", '09/06/1978'))
            ->setPicture('mattBellamy.jpg');
        $manager->persist($m3);



        $manager->flush();

        // other fixtures can get this object using the UserFixtures::ADMIN_USER_REFERENCE constant
        $this->addReference(self::ID1, $a1);
        $this->addReference(self::ID2, $a2);
        $this->addReference(self::ID3, $a3);
        $this->addReference(self::ID4, $a4);

        $this->addReference(self::M1, $m1);
        $this->addReference(self::M2, $m2);
        $this->addReference(self::M3, $m3);

    }
}
