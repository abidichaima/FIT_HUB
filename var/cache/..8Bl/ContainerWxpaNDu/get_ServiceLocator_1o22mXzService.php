<?php

namespace ContainerWxpaNDu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1o22mXzService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1o22mXz' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1o22mXz'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'participationSeance' => ['privates', '.errored..service_locator.1o22mXz.App\\Entity\\ParticipationSeance', NULL, 'Cannot autowire service ".service_locator.1o22mXz": it references class "App\\Entity\\ParticipationSeance" but no such service exists.'],
        ], [
            'participationSeance' => 'App\\Entity\\ParticipationSeance',
        ]);
    }
}
