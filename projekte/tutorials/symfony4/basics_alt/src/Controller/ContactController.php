<?php

namespace App\Controller;

use App\Form\ContactType; //wichtig um ContactType verwenden zu können
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;



class ContactController extends AbstractController
{

	//basic contact function

    /**
     * @Route("/contact/basic", name="contactbasic")
     */
    public function contactBasic()
    {   
    	//Form erstellen (ContactType ist gleich src/Form/ContactType)
    	$form = $this->createForm(ContactType::class);
    	//FormView wird benötigt als Argument:
        $form_view = $form->createView();
    	
    	return $this->render('/public/contact/index.html.twig',
    		['controller_name' => 'ContactController',
			 'our_form' => $form_view    		 
    	]); 	
    }


    //extended version with form input/validation etc.

    /**
     * @Route("/contact", name="contact")
     */
    public function contactValidation(Request $request,  \Swift_Mailer $mailer)
    {   
    	dump($request);

    	//Form erstellen (ContactType ist gleich src/Form/ContactType)
    	$form = $this->createForm(ContactType::class);

    	//Form auf eingehenden Request ansetzen:
    	$form->handleRequest($request);

    	//$this->doSomethingWithTheFormData($form);
    	$this->sendEmail($mailer, $form);

    	//FormView wird benötigt als Argument:
        $form_view = $form->createView();
    	
    	return $this->render('/public/contact/index.html.twig',
    		['controller_name' => 'ContactController',
			 'our_form' => $form_view    		 
    	]); 	
    }





    private function doSomethingWithTheFormData($form)
    {

    	//Validierung der Eingaben (Serverseitig)
    	if ($form->isSubmitted() && $form->isValid() ) 
    	{
    		//Daten auslesen in Array 
        	$contactFormData = $form->getData();

        	//Ausgabe der Variable:
    		// im debug tool des symphony-profilers 
// 			dump($contactFormData);
   			// via php direkt auf seite ausgegeben
// 			var_dump($contactFormData);    		

    		if ($contactFormData['dateOfBirth'])
    		{
    			$dateTime = $contactFormData['dateOfBirth'];   		   	
/*
		    	// Stolperstein "new":
		    	// Über \ wird ausgeschlossen, dass sich PHP auf Symfony bezieht
		    	// sondern ein PHP Objekt verwendet	
		    	$o = new \ReflectionObject($dateTime);
				$p = $o->getProperty('date');
				$date = $p->getValue($dateTime);
				echo $date;
				var_dump($contactFormData['dateOfBirth']);
*/

				//Ausgabe: 
				// - arrayzugriff
				echo ((array) $contactFormData['dateOfBirth'])['date'] . ' <br>';

				// - objektzugriff via format methode
				echo  $contactFormData['dateOfBirth']->format('Y');		
	    	}//if
    	}//if
    }//doSomething




    private function sendEmail( \Swift_Mailer $mailer, $form)
    {

	    $this->addFlash('info', 'Some useful info');

        if ($form->isSubmitted() && $form->isValid()) {

            $contactFormData = $form->getData();

            $message = (new \Swift_Message('You Got Mail from your own Symfony!'))
            // setFrom() only works in gmail with valid email addresses
            // if its not valid, its set by your own address (c.beer@gmail.com)
            // https://stackoverflow.com/questions/14128472/how-to-set-from-property-using-swiftmailer-with-gmail
               ->setFrom($contactFormData['from'])
               ->setTo('cbeer@schirra-it.de')
               ->setBody(
                   $contactFormData['message'] . " from :" . $contactFormData['from'], 
                   'text/plain'
            );

       		$mailer->send($message); 
            //FLASH-Message
       		$this->addFlash('success', 'Email wurde versandt');
			
			return $this->redirectToRoute('welcome');
			
        }//if form

    }//sendEmail








}
