<?php

namespace App\DataFixtures;


use App\Entity\Product;
use App\Entity\Category;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {

        //Kategorien erstellen
        $holz = new Category();
        $holz ->setName('holz');

        $metall = new Category();
        $metall->setName('metall');


        //Produkte
        $product = new Product();
        $product->setName('Pfosten');

        $product2 = new Product();
        $product2->setName('Latte');

        $product3 = new Product();
        $product3->setName('Voll-Pfosten');


        //kategorien zuweisen
        // relates this product to the category
        $product->setCategory($holz);
        $product2->setCategory($holz);
        $product3->setCategory($metall);

        $manager->persist($holz);
        $manager->persist($metall);

        $manager->persist($product);
        $manager->persist($product2);
        $manager->persist($product3);
        $manager->flush();
    }
}
