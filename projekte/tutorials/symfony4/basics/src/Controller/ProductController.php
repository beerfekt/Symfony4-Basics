<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Category;
use App\Entity\User;
use App\Entity\Rolle;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
#deprecated?
use Symfony\Component\HttpFoundation\Request; 

class ProductController extends AbstractController
{
    /**
     * @Route("/produkte", name="produkte")
     */
    public function index()
    {

        //Produkte - fragen -> kategorien
        $produkte = $this->getDoctrine()
            ->getRepository(Product::class)
            ->findAll();

        //Kategorien - nach -> Produkten
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(
                ['name' => 'holz']
            );
        $holzProdukte = $category->getProducts();


        //User - fragen -> kategorien
        $users = $this->getDoctrine()
            ->getRepository(User::class)
            ->findAll();

        //TODO: dev, rollen eines nutzers rausfindden, tests etc. ...
/*
        $user = $this->getDoctrine()
                 ->getRepository(User::class)
                 ->findOneBy(
                    ['username'=>'admin']
                 );

        $rollen = $user->getRoles();
*/



       dump($users);
       dump($produkte);
       dump($category);

        return $this->render('/public/content/produkte.html.twig',
                [
                 'produkte' => $produkte,
                 'holzprodukte' => $holzProdukte,
                 'users'=> $users,
                ]
            );
        //deprecaded?
    	//return new Response('hello', 200);

    }


}
