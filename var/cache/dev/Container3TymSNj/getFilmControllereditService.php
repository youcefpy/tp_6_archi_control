<?php

namespace Container3TymSNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilmControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FSMk43a.App\Controller\FilmController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.FSMk43a'] ?? $container->load('get_ServiceLocator_FSMk43aService'));

        if (isset($container->privates['.service_locator.FSMk43a.App\\Controller\\FilmController::edit()'])) {
            return $container->privates['.service_locator.FSMk43a.App\\Controller\\FilmController::edit()'];
        }

        return $container->privates['.service_locator.FSMk43a.App\\Controller\\FilmController::edit()'] = $a->withContext('App\\Controller\\FilmController::edit()', $container);
    }
}