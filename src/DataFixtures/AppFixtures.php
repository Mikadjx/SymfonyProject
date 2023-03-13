<?php

namespace App\DataFixtures;


use App\Entity\Contact;
use Faker\Factory;
use Faker\Generator;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;



class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */

    private Generator $faker;

    public function __construct()
    {
    $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void

    {

    /*Création de boucle pour parcour l'objet "contact"*/

    for ($i= 0 ; $i<=50 ; $i++) {


            $contact = new contact();
            $contact->setFirstName($this->faker->word(1))
            ->setLastName($this->faker->word(1))
            ->setEmail($this->faker->safeEmail())
            ->setSujet($this->faker->word(5))
            ->setMessage('Message #5')
            ->setLu('Lu #6')
            ->setDateEnvoi(new \DateTime());
            $manager->persist($contact);
    }

 
        
        $manager->flush();
    }
}