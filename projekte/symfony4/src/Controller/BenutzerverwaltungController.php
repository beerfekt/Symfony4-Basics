<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BenutzerverwaltungController extends AbstractController
{
    /**
     * @Route("/admin/benutzerverwaltung", name="benutzerverwaltung")
     */
    public function index()
    {
        $users = $this->getDoctrine()
                      ->getRepository(User::class)
                      ->findAll();


        return $this->render('admin/benutzerverwaltung/index.html.twig', [
            'users' => $users,
        ]);
    }






    //Form erstellen
    protected function erstelleForm(string $buttonLabel, User $user) :Form
    {

        $formControl = array('class' => 'form-control');

        $form = $this->createFormBuilder($user)

            ->add('username',
                TextType::class,
                array('attr' => $formControl))

            ->add('email',
                TextType::class, array(
                'attr' => $formControl
            ))

            ->add('password',
                TextType::class, array(
                    'attr' => $formControl
            ))

            ->add('save', SubmitType::class, array(
                'label' => $buttonLabel,
                'attr' => array('class' => 'btn btn-primary mt-3')
            ))

            ->getForm();

        return $form;
    }


}
