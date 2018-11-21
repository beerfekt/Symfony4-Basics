<?php

namespace App\Controller;

use App\Entity\Article;

use Doctrine\DBAL\Schema\View;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\Method;
use Symfony\Component\Form\Extension\Core\Type\Controller;

//Form elements
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class ArticleController extends AbstractController
{


    /**
     * @Route("/articles", name="article_list")
     */
    public function index() : Response
    {
        //Fetch all articles
        $articles = $this->getDoctrine()->getRepository(Article::class)->findAll();

        return $this->render(
            'articles/index.html.twig',
            [
            'controller_name' => 'ArticleController',
            'articles' => $articles
            ]
        );
    }//index()






    /**
     * @Route("/articles/{id}", name="article_show")
     */
    public function show(int $id) : Response
    {
        $article = $this->findeArtikel($id);

        return $this->render('articles/show.html.twig',
            [
                'controller_name' => 'ArticleController',
                'article' => $article
            ]
        );
    }//index()





    /**
     * @Route("/article/delete/{id}" )
     * Method({"DELETE"})
     */
    public function loescheArtikel(Request $request,int $id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($article);
        $entityManager->flush();

        $this->addFlash('success', 'Artikel mit Id: ' . $id . ' <br> wurde erfolgreich gelöscht!');
        //$response = new Response();
        //$response->send();
    }



    /**
     * @Route("/article/new", name="new_article")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) : Response {

        $article = new Article();
        $form = $this->erstelleForm('Create', $article );

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
            return $this->redirectToRoute('article_list');
        }

        return $this->render('articles/new.html.twig', array(
            'form' => $form->createView()
        ));
    }




    /**
     * @Route("/article/edit/{id}", name="edit_article")
     * Method({"GET", "POST"})
     */
    public function edit(Request $request,int $id) :Response {

        $form = $this->erstelleForm('Edit', $this->findeArtikel($id));

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            return $this->redirectToRoute('article_list');
        }

        return $this->render('articles/edit.html.twig', array(
            'form' => $form->createView()
        ));
    }




    //Artikel über ID finden:
    protected function findeArtikel(int $id) :Article
    {
        return $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);
    }


    //Artikel über ID finden:
    protected function findeAlleArtikel():Form
    {
        return $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();
    }


    //Daten in DB schreiben
    private function writeDataIntoDB (Form $form){
        if ($form->isSubmitted() && $form->isValid())
        {
            $article = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
        }
    }


    //Form erstellen
    protected function erstelleForm(string $buttonLabel, Article $article):Form
    {

        $formControl = array('class' => 'form-control');

        $form = $this->createFormBuilder($article)
            ->add('title',
                TextType::class,
                array('attr' => $formControl))
            ->add('body', TextareaType::class, array(
                'required' => false,
                'attr' => $formControl
            ))
            ->add('save', SubmitType::class, array(
                'label' => $buttonLabel,
                'attr' => array('class' => 'btn btn-primary mt-3')
            ))
            ->getForm();

        return $form;
    }

}//endof class








//array-loop test
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








