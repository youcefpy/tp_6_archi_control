<?php

namespace Container2x75mkq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YcdKq5lService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YcdKq5l' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YcdKq5l'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'acteur' => ['privates', '.errored..service_locator.YcdKq5l.App\\Entity\\Acteur', NULL, 'Cannot autowire service ".service_locator.YcdKq5l": it needs an instance of "App\\Entity\\Acteur" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'acteur' => 'App\\Entity\\Acteur',
            'entityManager' => '?',
        ]);
    }
}