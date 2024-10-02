<?php

namespace App\DataFixtures;

use App\Entity\Atricle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i<=10; $i++){
            $article = new Atricle();
            $article->setTitle("Article -> $i")->setDescription("Content of article -> $i");
            // keep tracking this object because we need it
            $manager->persist($article);
        }
        // after tracking all the objects, here we will add theme to the BDD
        $manager->flush();
    }
}
