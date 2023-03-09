<?php

namespace ContainerHEIKASe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WOFuN7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wOFu_N7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wOFu_N7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'seance' => ['privates', '.errored..service_locator.wOFu_N7.App\\Entity\\Seance', NULL, 'Cannot autowire service ".service_locator.wOFu_N7": it references class "App\\Entity\\Seance" but no such service exists.'],
            'seanceRepository' => ['privates', 'App\\Repository\\SeanceRepository', 'getSeanceRepositoryService', true],
        ], [
            'seance' => 'App\\Entity\\Seance',
            'seanceRepository' => 'App\\Repository\\SeanceRepository',
        ]);
    }
}
