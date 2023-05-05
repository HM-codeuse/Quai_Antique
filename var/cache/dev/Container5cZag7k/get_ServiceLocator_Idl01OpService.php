<?php

namespace Container5cZag7k;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Idl01OpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Idl01Op' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Idl01Op'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'menuRepository' => ['privates', 'App\\Repository\\MenuRepository', 'getMenuRepositoryService', true],
        ], [
            'menuRepository' => 'App\\Repository\\MenuRepository',
        ]);
    }
}
