<?php

namespace Container3TymSNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUtilisateurControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YcQzc6c.App\Controller\UtilisateurController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YcQzc6c.App\\Controller\\UtilisateurController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'utilisateur' => ['privates', '.errored..service_locator.YcQzc6c.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.YcQzc6c": it needs an instance of "App\\Entity\\Utilisateur" but this type has been excluded in "config/services.yaml".'],
        ], [
            'utilisateur' => 'App\\Entity\\Utilisateur',
        ]))->withContext('App\\Controller\\UtilisateurController::show()', $container);
    }
}
