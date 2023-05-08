<?php

namespace Container7yRZXdp;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B1vFZ8eService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.B1vFZ8e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.B1vFZ8e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'dishRepository' => ['privates', 'App\\Repository\\DishRepository', 'getDishRepositoryService', true],
            'openingHoursRepository' => ['privates', 'App\\Repository\\OpeningHoursRepository', 'getOpeningHoursRepositoryService', true],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'dishRepository' => 'App\\Repository\\DishRepository',
            'openingHoursRepository' => 'App\\Repository\\OpeningHoursRepository',
        ]);
    }
}
