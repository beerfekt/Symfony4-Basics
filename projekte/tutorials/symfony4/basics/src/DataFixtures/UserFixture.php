<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

//add your used classes:
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends Fixture
{

    //encoder could not be passed directly to the load() function (Because the Fixture class doesnt implement it),
    //but you can pass it to the constructor and the global $encoder
    private $encoder;


    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }


    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


        //Create your user-object
        $user = new User();
        $user->setUsername('admin');
        $user->setPassword(
            //encode the password
            $this->encoder->encodePassword($user, '0000')
        );
        $user->setEmail('pommes@bu.de');

        $manager->persist($user);
        $manager->flush();
    }
}
