<?php

namespace ContainerYk60Vmh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getActeurControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YcdKq5l.App\Controller\ActeurController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.YcdKq5l'] ?? $container->load('get_ServiceLocator_YcdKq5lService'));

        if (isset($container->privates['.service_locator.YcdKq5l.App\\Controller\\ActeurController::edit()'])) {
            return $container->privates['.service_locator.YcdKq5l.App\\Controller\\ActeurController::edit()'];
        }

        return $container->privates['.service_locator.YcdKq5l.App\\Controller\\ActeurController::edit()'] = $a->withContext('App\\Controller\\ActeurController::edit()', $container);
    }
}
