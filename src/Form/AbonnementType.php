<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use DateTime;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomAbonnement')
            ->add('dateDebut', DateType::class,[
                'widget' => 'single_text',
                'html5' =>true,
                'data' => new \DateTime(),
            ])
            
            ->add('dateFin', DateType::class,[
                'widget' => 'single_text',
                'html5' =>true,
                'data' => new \DateTime(),
            ])
            ->add('etatAbonnement')
            ->add('typeAbonnement')
            ->add('pack')
            
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Abonnement::class,
        ]);
    }
}
