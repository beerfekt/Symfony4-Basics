<?php

namespace App\Controller;

use App\Entity\Article;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function index()
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
    public function show($id)
    {
        $article = $this->findeArtikelMitID($id);

        return $this->render('articles/show.html.twig',
            [
                'controller_name' => 'ArticleController',
                'article' => $article
            ]
        );
    }//index()









    //Artikel über ID finden:
    protected function findeArtikelMitID($id)
    {
        return $this->getDoctrine()
                    ->getRepository(Article::class)
                    ->find($id);
    }




    //Form erstellen
    protected function erstelleForm($article, $buttonName, $routenName)
    {
        $formcontrol = array('class' => 'form-control');

        return $this->createFormBuilder($article)
                    ->add('title',
                        TextType::class,
                        array('attr' => $formcontrol
                        )
                    )
                    ->add('body',
                        TextareaType::class,
                        array('required' => false,
                            'attr' => $formcontrol
                        )
                    )
                    ->add('save',
                        SubmitType::class,
                        array('label' => $buttonName,
                            'attr' => array('class' => 'btn btn-primary mt-3')
                        )
                    )
                    ->setAction($this->generateUrl($routenName, array('slug' =>'test')))
                    ->getForm();
    }//createForm()



    //Daten in DB schreiben
    private function writeDataIntoDB ($form){
        if ($form->isSubmitted() && $form->isValid())
        {
            $article = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($article);
            $entityManager->flush();
        }
    }




    /**
     * @Route("/article/delete/{id}" )
     * Method({"DELETE"})
     */
    public function loescheArtikel(Request $request, $id)
    {
        $article = $this->getDoctrine()
            ->getRepository(Article::class)
            ->find($id);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($article);
        $entityManager->flush();

        $response = new Response();

        $response->send();
    }



    /**
     * @Route("/article/new", name="new_article")
     * Method({"GET", "POST"})
     */
    public function new(Request $request) {
        $article = new Article();
        $form = $this->createFormBuilder($article)
            ->add('title',
                   TextType::class,
                    array('attr' => array('class' => 'form-control')))
            ->add('body', TextareaType::class, array(
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Create',
                'attr' => array('class' => 'btn btn-primary mt-3')
            ))
            ->getForm();
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
    public function edit(Request $request, $id) {
        $article = new Article();
        $article = $this->getDoctrine()->getRepository(Article::class)->find($id);
        $form = $this->createFormBuilder($article)
            ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('body', TextareaType::class, array(
                'required' => false,
                'attr' => array('class' => 'form-control')
            ))
            ->add('save', SubmitType::class, array(
                'label' => 'Update',
                'attr' => array('class' => 'btn btn-primary mt-3')
            ))
            ->getForm();
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





}//endof class









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





    /**
     * @Route("/articles/save", name="save_articles")
     */

/*
public function save()
{

    $article = new Article();
    $article->setTitle('testtitel');
    $article->setBody('Testnachricht du vollpfosten hanswurst, haderlump!!!');


    // you can fetch the EntityManager via $this->getDoctrine()
    // or you can add an argument to your action: index(EntityManagerInterface $entityManager)
    $entityManager = $this->getDoctrine()->getManager();
    // tell Doctrine you want to (eventually) save the Product (no queries yet)
    $entityManager->persist($article);
    // actually executes the queries (i.e. the INSERT query)
    $entityManager->flush();

    return new Response('Saved an article with the id of  '.$article->getId()) ;
}//index()



    /**
     * @Route("/article/new", name="article_new")
     * Method({"GET", "POST"})
     */

/*
public function artikelNew()
{
    //Form erstellen
    $form = $this->erstelleForm( new Article() , 'Create','article_create');

    //Form an Frontend übergeben:
    return $this->render('articles/new.html.twig',
        ['formView' => $form->createView(),
            'form' => $form
        ]
    );


}
*/


// artikelNew() springt auf artikelErstellen()

/*
/**
 * @Route("/article/create", name="article_create")
 * Method({"GET", "POST"})
 */
/*
public function artikelErstellen(Request $request)
{
    $form = request.$this->getParameter('form');

    //Form Verhalten zuweisen:
    $form->handleRequest($request);

    //Daten der Form in Datenbank schreiben
    $this->writeDataIntoDB($form);
    return $this->redirectToRoute('article_list');

}
*/









