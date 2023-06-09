<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TelType;

class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr'=>[
                    'class' => 'form-control'
                ]
            ])
            ->add('nom', TextType::class, [
                'attr'=>[
                    'class' => 'form-control'
                ]
            ])
            ->add('prenom', TextType::class, [
                'attr'=>[
                    'class' => 'form-control'
                ]
            ])
            ->add('telephone', TelType::class, [
                'attr'=>[
                    'class' => 'form-control'
                ]
            ])
            ->add('langue', ChoiceType::class, [
                'choices' => [
                    'Français' => 'Fr',
                    'English' => 'En',
                ],
                'attr'=>[
                    'class' => 'form-control'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
