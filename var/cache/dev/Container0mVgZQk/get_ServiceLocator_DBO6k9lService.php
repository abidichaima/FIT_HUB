<?php

namespace Container0mVgZQk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DBO6k9lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DBO6k9l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DBO6k9l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'seance' => ['privates', '.errored..service_locator.DBO6k9l.App\\Entity\\Seance', NULL, 'Cannot autowire service ".service_locator.DBO6k9l": it references class "App\\Entity\\Seance" but no such service exists.'],
        ], [
            'seance' => 'App\\Entity\\Seance',
        ]);
    }
}
