<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{

    //the route is configured in: config/packages/security.yaml

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $aUtils)
    {

        $error = $aUtils->getLastAuthenticationError();

        $lastUsername = $aUtils->getLastUsername();




        if ($error){
            $this->addFlash('danger', $error->getMessageKey());
        }


        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername
        ]);
    }


    //TODO: https://www.youtube.com/watch?v=972QnZikzMA  16:00 weitermachen


    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        echo 'successfully logged out';
    }


}
