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


    //Darf nicht mit /admin ... anfangen da sonst Probleme mit security config entstehen
    // weil folgender bereich der mit /admin anfängt nur im eingeloggten zustand erreicht werden darf

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

        return $this->render('admin/security/login.html.twig', [
            'last_username' => $lastUsername
        ]);
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        echo 'successfully logged out';
    }


}
