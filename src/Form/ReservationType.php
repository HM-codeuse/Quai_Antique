<?php

namespace App\Form;

use App\Entity\Allergy;
use App\Entity\Reservation;
use App\Entity\Table;
use App\Entity\User;
use Doctrine\DBAL\Types\DateType;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user', EntityType::class, [
                    'class' => User::class,
                    'label' => 'Votre nom'])
            ->add('email')
            ->add('date')
            ->add('allergy', EntityType::class, [
                    'class'=> Allergy::class,
                    'label' => 'name'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
