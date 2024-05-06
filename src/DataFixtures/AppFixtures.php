<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\EtudiantFactory;
use App\Factory\InstitutFactory;
use App\Factory\UserFactory;




class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        EtudiantFactory ::createMany(10);
        InstitutFactory ::createOne();
        UserFactory ::createMany(10);
        $manager->flush();
    }
}
