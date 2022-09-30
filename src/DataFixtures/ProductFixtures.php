<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product1 = new Product();
        $product1->setName('Banane')
            ->setPrice(1.22);
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('Fraises')
            ->setPrice(4.12);
        $manager->persist($product2);

        $product3 = new Product();
        $product3->setName('Pommes')
            ->setPrice(1.89);
        $manager->persist($product3);


        $manager->flush();
    }
}
