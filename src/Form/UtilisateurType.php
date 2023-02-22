<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Form\FormTypeInterface;
use Symfony\Component\Validator\Constraints\LessThanOrEqual;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;


class UtilisateurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('email')
        ->add('nom')
        ->add('prenom')
        ->add('adresse')
        ->add('telephone')
        ->add('date_de_naissance', DateType::class, [
            'format' => 'dd/MM/yyyy',
            'html5' => false,
            
            
            'years' => range(date('Y')-50, date('Y') - 15),
            'constraints' => [
                
            ],
        ])
    
        ->add('genre',ChoiceType::class, [
            'label' => 'Choisissez votre sexe ',
            'choices' => [
                'Merci de choisir votre sexe' => null,
                'Homme' => 'Homme',
                'Femme' => 'Femme',
                
                
            ],
            'multiple' => false,
            'expanded' => false,
        ])
        
        ->add('roles',ChoiceType::class, [
            'required' => true,
            'multiple' => false,
            'expanded' => false,
            'choices' => [
                'MEMBRE' => 'ROLE_MEMBRE',
                'NUTRISIONNISTE' => 'NUTRISIONNISTE',
                'COACH' => 'COACH',
                'ADMIN' => 'ADMIN',
                
            ],
        ])
    
        ->add('password')
    
        
    ;
    $builder->get('roles')
    ->addModelTransformer(new CallbackTransformer(
        function ($rolesArray) {
            return count($rolesArray) ? $rolesArray[0] : null;
        },
        function ($rolesString) {
            return [$rolesString];
        }
    ));
}

public function configureOptions(OptionsResolver $resolver): void
{
    $resolver->setDefaults([
        'data_class' => Utilisateur::class,
    ]);
}
}
