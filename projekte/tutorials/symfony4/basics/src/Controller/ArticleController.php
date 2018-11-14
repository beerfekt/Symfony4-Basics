<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Article;


class ArticleController extends AbstractController
{


    /**
     * @Route("/articles", name="articles")
     */
    public function index()
    {

        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        if (!$articles) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        return $this->render(
            'articles/articles_output.html.twig',
            [
            'controller_name' => 'ArticleController',
            'articles' => $articles
            ]
        );

    }//index()



    /**
     * @Route("/articles/save", name="save_articles")
     */
    public function save()
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $article = new Article();
        $article->setTitle('testtitel');
        $article->setBody('Testnachricht du vollpfosten hanswurst, haderlump!!!');

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($article);
        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();


        return new Response('Saved an article with the id of  '.$article->getId());


    }//index()






    /**
     * @Route("/articles/{id}", name="article_show")
     */
    public function show($id)
    {

        $article = $this->getDoctrine()
                         ->getRepository(Article::class)
                        ->find($id);

        return $this->render('articles/show.html.twig',
            [
                'controller_name' => 'ArticleController',
                'article' => $article
            ]
        );

    }//index()











/*

    private function createArticles()
    {

        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        //TEST #1
        $articles = array();
        $anzahl = 3;

         for ($i = 0; $i < $anzahl; $i ++)
         {
            $article = new Article();
            $article->setTheTitle('testtitel');
            $article->setTheBody('Testnachricht du vollpfosten hanswurst, haderlump!!!');

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($article);
            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            //TEST #2
            $articles[$i] = $article;
         }

        return $articles;

     }

*/







}
