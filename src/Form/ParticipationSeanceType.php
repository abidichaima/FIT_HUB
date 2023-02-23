<?php

namespace App\Form;

use App\Entity\ParticipationSeance;
use App\Entity\User;
use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Choice;
use Symfony\Component\Validator\Constraints\Date;


class ParticipationSeanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $startDate = new \DateTime();

        $builder
            ->add('typeSport', ChoiceType::class, [
                'label' => 'Choisissez',
                'choices' => [
                    'En_ligne' => 'En_ligne',
                    'Presentiel' => 'Presentiel',
                ],
                'multiple' => false,
                'expanded' => false
            ])
            ->add('dateParticipation', DateType::class, [
                'widget' => 'choice',
                'html5' => false,
                'label' => 'Date début de la séance',
                'data' => $startDate, // Set start date as default value
                'attr' => [
                    'class' => 'form-control datetimepicker-input',
                    'data-toggle' => 'datetimepicker',
                    'data-target' => '#datetimepicker1'
                ]
            ])
            ->add('participant', EntityType::class, [
                'class' => User::class,
                'label' => 'Participant',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('u')
                        ->where('u.roles LIKE :role')
                        ->setParameter('role', '%["ROLE_MEMBRE"]%')
                        ->orderBy('u.nom', 'ASC');
                },
                'choice_label' => function (User $user) {
                    return $user->getNom() . ' ' . $user->getPrenom();
                },
                'multiple' => false,
                'expanded' => false,
                'constraints' => [new NotBlank()],
            ])
            ->add('seance')

        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ParticipationSeance::class,
        ]);
    }
}
