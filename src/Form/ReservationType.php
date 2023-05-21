<?php

namespace App\Form;

use App\Entity\Allergy;
use App\Entity\Slot;
use App\Entity\User;
use App\Entity\Table;
use App\Entity\Reservation;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;


class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,  array $options): void
    {
        
        $builder
            ->add('user', EntityType::class, [
                    'class'=> User::class,
                    'label' => 'Votre nom'])
            ->add('email', EmailType::class, [
                'label' => 'Votre email'])
            ->add('date', DateType::class, [
                'label' => 'Date de la réservation',
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => 'now', 
                        'message' => 'La date doit être ultérieure ou égale à la date actuelle.'
                    ]),                
                ],
                'widget' => 'single_text'])
            ->add('slot', EntityType::class, [
                'class' => Slot::class,     
                'label' => 'Heure de la réservation',
                // 'query_builder' => function (EntityRepository $er) {
                //     return $er->createQueryBuilder('s')
                //         ->orderBy('s.id', 'ASC');
                // },
                'choice_label' => function (Slot $slot) {
                    return $slot->getTime()->format('H:i');
                },
                'placeholder' => 'Choisissez l\'heure de votre réservation ',
            ])
            ->add('allergy', EntityType::class, [
                'class' => Allergy::class,
                'multiple'=> true,
                'required' => false,
                'label' => 'Allergie à signaler'
            ])
            ->add('table', EntityType::class, [
                'class' => Table::class,
                'label' => 'Sélectionner une table',
                // 'query_builder' => function (EntityRepository $er) {
                //     return $er->createQueryBuilder('t')
                //         ->orderBy('t.id', 'ASC');
                // },
                'choice_label' => function (Table $table) {
                    return 'Table ' . $table->getId() . ' (' . $table->getNumberOfSettings() . ')';
                },
                'placeholder' => 'Choisissez une table',
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Enregistrer la réservation'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
       
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
