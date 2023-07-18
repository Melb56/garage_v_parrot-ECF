<?php

namespace App\DataFixtures;

use App\Entity\Employee;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {   
        // Utilisation de Faker
        $faker = Factory::create('fr_FR');
        
        // Creation d'un user
        $employee = new employee();

        $employee->setEmail('user@test.com')
                 ->setPassword($faker->password);

                 $manager->persist($employee);


        // Creation d'un produit
        for ($i=0; $i < 10; $i++) {
            $product = new Product();
            
            $product->setTitle($faker->words(2, true))
                    ->setPrice($faker->randomFloat(2, 100, 9999))
                    ->setdateTime($faker->date('2000', '2022'))
                    ->setKm($faker->randomFloat(2, 100, 9999))
                    ->setDescription($faker->text(500))
                    ->setUser($employee);
                    
            $manager->persist($product);

        }

        $manager->flush();
    }
}
