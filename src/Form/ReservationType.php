<?php

namespace App\Form;

use App\Entity\Allergy;
use App\Entity\Slot;
use App\Entity\Table;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;


class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,  array $options): void
    {
        
        $user = $options['user'];
        $userName = $user ? $user->getUsername() : '';
        $userEmail = $user ? $user->getEmail() : '';
        
        
        $builder
            ->add('user', TextType::class, [
                    'label' => 'Votre nom',
                    'required' => false,
                    'data' => $userName,
                    'disabled' => true,
                ])

            ->add('email', TextType::class, [
                'label' => 'Votre email',
                    'required' => false,
                    'data' => $userEmail,
                    'disabled' => true,])

            ->add('Date', DateType::class, [
                'label' => 'Date de la réservation',
                'constraints' => [
                    new GreaterThanOrEqual([
                        'value' => Date('Y-m-d'), 
                        'message' => 'La date doit être ultérieure ou égale à la date actuelle.'
                    ]),                
                ],
                'widget' => 'single_text'])
            ->add('slot', EntityType::class, [
                'class' => Slot::class,     
                'label' => 'Heure de la réservation',
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
                'choice_label' => function (Table $table) {
                    return 'Table Quai n°'. $table->getId(). ' de ' . $table->getNumberOfSettings() . ' personnes';
                },
            ])
    
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
       
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'user' => null,
        ]);
    }
}
