<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Rolle;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

//add your used classes:


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

        //roles
        $rolle_admin = new Rolle();
        $rolle_admin->setBezeichnung('ROLE_ADMIN');
        $rolle_super_admin = new Rolle();
        $rolle_super_admin->setBezeichnung('ROLE_SUPER_ADMIN');
        $manager->persist($rolle_admin);
        $manager->persist($rolle_super_admin);


        //user: admin
        $user_admin = new User();
        $user_admin->setUsername('admin');
        $user_admin->setEmail('pommes@bu.de');
        $user_admin->addRoles($rolle_admin);
        $user_admin->setPassword(
        //encode the password
            $this->encoder->encodePassword($user_admin, '1111')
        );
        $manager->persist($user_admin);



        //user: root
        $user_root = new User();
        $user_root->setUsername('root');
        $user_root->setEmail('wurst@bu.de');
        $user_root->addRoles($rolle_admin);
        $user_root->addRoles($rolle_super_admin);
        $user_root->setPassword(
            //encode the password
            $this->encoder->encodePassword($user_root, '0000')
        );
        $manager->persist($user_root);




        $manager->flush();


    }
}
