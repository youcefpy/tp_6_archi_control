<?php

namespace Container3TymSNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilmControllershowService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vKjPpD9.App\Controller\FilmController::show()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vKjPpD9.App\\Controller\\FilmController::show()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'film' => ['privates', '.errored..service_locator.vKjPpD9.App\\Entity\\Film', NULL, 'Cannot autowire service ".service_locator.vKjPpD9": it needs an instance of "App\\Entity\\Film" but this type has been excluded in "config/services.yaml".'],
        ], [
            'film' => 'App\\Entity\\Film',
        ]))->withContext('App\\Controller\\FilmController::show()', $container);
    }
}
