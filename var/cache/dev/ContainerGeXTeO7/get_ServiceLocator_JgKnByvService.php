<?php

namespace ContainerGeXTeO7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JgKnByvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.JgKnByv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.JgKnByv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'video' => ['privates', '.errored..service_locator.JgKnByv.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.JgKnByv": it references class "App\\Entity\\Video" but no such service exists.'],
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
        ], [
            'video' => 'App\\Entity\\Video',
            'videoRepository' => 'App\\Repository\\VideoRepository',
        ]);
    }
}