<?php

namespace App\DataFixtures;

use App\Entity\Text;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $text = new Text();
        $text->setTitle('Test');
        $text->setDescription('dun lefficacité');
        $manager->persist($text);

        $manager->flush();
    }
}
