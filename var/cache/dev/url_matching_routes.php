<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/acteur' => [[['_route' => 'app_acteur_index', '_controller' => 'App\\Controller\\ActeurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/acteur/new' => [[['_route' => 'app_acteur_new', '_controller' => 'App\\Controller\\ActeurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/film' => [[['_route' => 'app_film_index', '_controller' => 'App\\Controller\\FilmController::index'], null, ['GET' => 0], null, false, false, null]],
        '/film/new' => [[['_route' => 'app_film_new', '_controller' => 'App\\Controller\\FilmController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/realisateur' => [[['_route' => 'app_realisateur_index', '_controller' => 'App\\Controller\\RealisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/realisateur/new' => [[['_route' => 'app_realisateur_new', '_controller' => 'App\\Controller\\RealisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur' => [[['_route' => 'app_utilisateur_index', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/utilisateur/new' => [[['_route' => 'app_utilisateur_new', '_controller' => 'App\\Controller\\UtilisateurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/acteur/([^/]++)(?'
                    .'|(*:221)'
                    .'|/edit(*:234)'
                    .'|(*:242)'
                .')'
                .'|/film/([^/]++)(?'
                    .'|(*:268)'
                    .'|/edit(*:281)'
                    .'|(*:289)'
                .')'
                .'|/realisateur/([^/]++)(?'
                    .'|(*:322)'
                    .'|/edit(*:335)'
                    .'|(*:343)'
                .')'
                .'|/utilisateur/([^/]++)(?'
                    .'|(*:376)'
                    .'|/edit(*:389)'
                    .'|(*:397)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        221 => [[['_route' => 'app_acteur_show', '_controller' => 'App\\Controller\\ActeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        234 => [[['_route' => 'app_acteur_edit', '_controller' => 'App\\Controller\\ActeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        242 => [[['_route' => 'app_acteur_delete', '_controller' => 'App\\Controller\\ActeurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        268 => [[['_route' => 'app_film_show', '_controller' => 'App\\Controller\\FilmController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        281 => [[['_route' => 'app_film_edit', '_controller' => 'App\\Controller\\FilmController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        289 => [[['_route' => 'app_film_delete', '_controller' => 'App\\Controller\\FilmController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        322 => [[['_route' => 'app_realisateur_show', '_controller' => 'App\\Controller\\RealisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        335 => [[['_route' => 'app_realisateur_edit', '_controller' => 'App\\Controller\\RealisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_realisateur_delete', '_controller' => 'App\\Controller\\RealisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        376 => [[['_route' => 'app_utilisateur_show', '_controller' => 'App\\Controller\\UtilisateurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        389 => [[['_route' => 'app_utilisateur_edit', '_controller' => 'App\\Controller\\UtilisateurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        397 => [
            [['_route' => 'app_utilisateur_delete', '_controller' => 'App\\Controller\\UtilisateurController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
