<?php

namespace ContainerC38kioh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JPJjQbjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jPJjQbj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jPJjQbj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'openingHoursRepository' => ['privates', 'App\\Repository\\OpeningHoursRepository', 'getOpeningHoursRepositoryService', true],
            'reservation' => ['privates', '.errored..service_locator.jPJjQbj.App\\Entity\\Reservation', NULL, 'Cannot autowire service ".service_locator.jPJjQbj": it references class "App\\Entity\\Reservation" but no such service exists.'],
            'reservationRepository' => ['privates', 'App\\Repository\\ReservationRepository', 'getReservationRepositoryService', true],
        ], [
            'openingHoursRepository' => 'App\\Repository\\OpeningHoursRepository',
            'reservation' => 'App\\Entity\\Reservation',
            'reservationRepository' => 'App\\Repository\\ReservationRepository',
        ]);
    }
}
