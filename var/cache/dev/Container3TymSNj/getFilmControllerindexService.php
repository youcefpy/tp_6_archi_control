<?php

namespace Container3TymSNj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFilmControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..yL1qU..App\Controller\FilmController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..yL1qU..App\\Controller\\FilmController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'filmRepository' => ['privates', 'App\\Repository\\FilmRepository', 'getFilmRepositoryService', true],
        ], [
            'filmRepository' => 'App\\Repository\\FilmRepository',
        ]))->withContext('App\\Controller\\FilmController::index()', $container);
    }
}