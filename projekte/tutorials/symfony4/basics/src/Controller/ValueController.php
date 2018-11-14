<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
#deprecated?
use Symfony\Component\HttpFoundation\Request; 

class ValueController extends AbstractController
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
     * @Route("/values", name="values")
     */
    public function values(Request $request)
    {
        //GET aus adresszeile: http://symfony-tutorial.test/values?name=test
    	$nameFromRequest = $request->query->get('name');

    	//return array and render template:
        return $this->render(
        	'content/values.html.twig',
        	['nameForTwig'=>'value received in the ValueController, passed from the url via GET: ' . $nameFromRequest,
        	 'someotherkey'=>'value received from Welcome-Controller:  some other value']
        );
    }


    // pfad , name des pfads, einschränkung via regex: nur Buchstaben Groß/klein erlaubt 
    //damit name nicht aus zahlen etc. besteht


    //GET aus URL: http://symfony-tutorial.test/persons/brutalo
        //1. brutalo wird durch @string in $name gespeichert
        //2. diese variable wird an funktion übergeben
    /**
     * @Route("/persons/{name}", name="persons" , requirements={"name"="[A-Za-z]+"});
     * @param string $name
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */

     public function persons(string $name = "default value - testbert"){
    	return $this->render(
        	'content/persons.html.twig',
        	['person_name' => $name]
        );
    }


}
