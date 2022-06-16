<?php

namespace App\DataFixtures;

use App\Entity\Equipement;
use App\Entity\Gite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class GiteFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create("fr_FR");

        $equipements= [];

        $equip1 = new Equipement();
        $equip1 ->setName('lave-linge');
        $manager->persist($equip1);
  
        $equip2 = new Equipement();
        $equip2 ->setName('lave-vaisselle');
        $manager->persist($equip2);
        
        $equip3 = new Equipement();
        $equip3->setName('climatisation');
        $manager->persist($equip3);
  
        $equip4 = new Equipement();
        $equip4 ->setName('télévision');
        $manager->persist($equip4);
        
        $equip5 = new Equipement();
        $equip5 ->setName('terrasse');
        $manager->persist($equip5);
  
  
        $equip6 = new Equipement();
        $equip6 ->setName('barbecue');
        $manager->persist($equip6);
  
        $equip7 = new Equipement();
        $equip7 ->setName('piscine privée');
        $manager->persist($equip7);
  
        $equip8 = new Equipement();
        $equip8 ->setName('piscine partagée');
        $manager->persist($equip8);
  
        $equip9 = new Equipement();
        $equip9 ->setName('tennis');
        $manager->persist($equip9);
  
        $equip10 = new Equipement();
        $equip10 ->setName('pingpong');
        $manager->persist($equip10);
  
  
          $manager->flush();

        array_push($equipements, $equip1,$equip2,$equip3,$equip4,$equip5,$equip6,$equip7,$equip8,$equip9,$equip10);

        for ($i=0; $i < 20; $i++){
            $gite = new Gite();
            $gite
            ->setNom($faker->streetName)
            ->setDescriptiion($faker->text(250))
            ->setSurface(random_int(50,200))
            ->setChambres(random_int(1,10))
            ->setCouchage(random_int(3,15))
            ->addEquipement($faker->randomElement($equipements))
            ->addEquipement($faker->randomElement($equipements))
            ->addEquipement($faker->randomElement($equipements));

                $manager->persist($gite);
            }

        $manager->flush();
    }
}
