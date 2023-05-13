<?php

namespace App\Form;

use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,  array $options): void
    {
        $builder
            ->add('user', TextType::class, [
                    'label' => 'Votre nom'])
            ->add('email', EmailType::class, [
                'label' => 'Votre email'])
            ->add('date', DateType::class, [
                'label' => 'Date de la réservation'])
            ->add('time', TimeType::class, [
                    'label' => 'Heure de la réservation',
                    'mapped'=>'false'])
            ->add('allergy', TextType::class, [
                'label' => 'Allergie à signaler'
            ])
            ->add('Submit', SubmitType::class, [
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
