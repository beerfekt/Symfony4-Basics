<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
#deprecated?
use Symfony\Component\HttpFoundation\Request; 

class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {    	
        return $this->render('welcome/index.html.twig');
        //deprecaded?
    	//return new Response('hello', 200);

    }


    /**
     * @Route("/hello", name="hello_page")
     */
    public function hello(Request $request)
    {

    	$requestValue = $request->query->get('somekey');

        return $this->render(
        	'content/hello_page.html.twig',
        	['somekey'=>'value received from Welcome-Controller: somevalue',
        	 'someotherkey'=>'value received from Welcome-Controller:  some other value']
        );
    }


    // pfad , name des pfads, einschränkung via regex: nur Buchstaben Groß/klein erlaubt 
    //damit name nicht aus zahlen etc. besteht

    /**
     * @Route("/persons/{name}", name="persons" , requirements={"name"="[A-Za-z]+"});
     * @param string $name
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

     public function persons(string $name = "testbert"){
    	return $this->render(
        	'content/persons.html.twig',
        	['person_name' => $name]
        );
    }


}
