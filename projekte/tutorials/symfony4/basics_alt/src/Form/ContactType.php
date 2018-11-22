<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Form Elements
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //creating the form fields:
        $builder
            ->add('field_name')
            ->add('name') /*default: texttype*/
            ->add('from', EmailType::class)
            //camelcase is convention
            // https://symfony.com/doc/current/reference/forms/types/datetime.html#years
            ->add('dateOfBirth', DateTimeType::class, array(
                                       //Plain php function date("Y"), to get the current date
                 'years' => range(1930, date("Y"))   
             ) //array
            )//add
            ->add('message', TextareaType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
