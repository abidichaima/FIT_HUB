<?php

namespace ContainerWxpaNDu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tn2JGxQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tn2JGxQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tn2JGxQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'participationSeanceRepository' => ['privates', 'App\\Repository\\ParticipationSeanceRepository', 'getParticipationSeanceRepositoryService', true],
        ], [
            'participationSeanceRepository' => 'App\\Repository\\ParticipationSeanceRepository',
        ]);
    }
}
