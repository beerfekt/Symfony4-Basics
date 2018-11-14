<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/articles", name="articles")
     */
    public function index()
    {

        // Source of Articles (temporarly an array, later from the database
        $articles = ['article1','article2'];

        return $this->render('articles/articles_output.html.twig', [
            'controller_name' => 'ArticleController',
            'articles' => $articles
        ]);
    }
}
