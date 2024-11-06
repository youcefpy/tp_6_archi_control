<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'app_acteur_index' => [[], ['_controller' => 'App\\Controller\\ActeurController::index'], [], [['text', '/acteur']], [], [], []],
    'app_acteur_new' => [[], ['_controller' => 'App\\Controller\\ActeurController::new'], [], [['text', '/acteur/new']], [], [], []],
    'app_acteur_show' => [['id'], ['_controller' => 'App\\Controller\\ActeurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/acteur']], [], [], []],
    'app_acteur_edit' => [['id'], ['_controller' => 'App\\Controller\\ActeurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/acteur']], [], [], []],
    'app_acteur_delete' => [['id'], ['_controller' => 'App\\Controller\\ActeurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/acteur']], [], [], []],
    'app_film_index' => [[], ['_controller' => 'App\\Controller\\FilmController::index'], [], [['text', '/film']], [], [], []],
    'app_film_new' => [[], ['_controller' => 'App\\Controller\\FilmController::new'], [], [['text', '/film/new']], [], [], []],
    'app_film_show' => [['id'], ['_controller' => 'App\\Controller\\FilmController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/film']], [], [], []],
    'app_film_edit' => [['id'], ['_controller' => 'App\\Controller\\FilmController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/film']], [], [], []],
    'app_film_delete' => [['id'], ['_controller' => 'App\\Controller\\FilmController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/film']], [], [], []],
    'app_realisateur_index' => [[], ['_controller' => 'App\\Controller\\RealisateurController::index'], [], [['text', '/realisateur']], [], [], []],
    'app_realisateur_new' => [[], ['_controller' => 'App\\Controller\\RealisateurController::new'], [], [['text', '/realisateur/new']], [], [], []],
    'app_realisateur_show' => [['id'], ['_controller' => 'App\\Controller\\RealisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/realisateur']], [], [], []],
    'app_realisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\RealisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/realisateur']], [], [], []],
    'app_realisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\RealisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/realisateur']], [], [], []],
    'app_utilisateur_index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur']], [], [], []],
    'app_utilisateur_new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'app_utilisateur_show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'app_utilisateur_delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\ActeurController::index' => [[], ['_controller' => 'App\\Controller\\ActeurController::index'], [], [['text', '/acteur']], [], [], []],
    'App\Controller\ActeurController::new' => [[], ['_controller' => 'App\\Controller\\ActeurController::new'], [], [['text', '/acteur/new']], [], [], []],
    'App\Controller\ActeurController::show' => [['id'], ['_controller' => 'App\\Controller\\ActeurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/acteur']], [], [], []],
    'App\Controller\ActeurController::edit' => [['id'], ['_controller' => 'App\\Controller\\ActeurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/acteur']], [], [], []],
    'App\Controller\ActeurController::delete' => [['id'], ['_controller' => 'App\\Controller\\ActeurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/acteur']], [], [], []],
    'App\Controller\FilmController::index' => [[], ['_controller' => 'App\\Controller\\FilmController::index'], [], [['text', '/film']], [], [], []],
    'App\Controller\FilmController::new' => [[], ['_controller' => 'App\\Controller\\FilmController::new'], [], [['text', '/film/new']], [], [], []],
    'App\Controller\FilmController::show' => [['id'], ['_controller' => 'App\\Controller\\FilmController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/film']], [], [], []],
    'App\Controller\FilmController::edit' => [['id'], ['_controller' => 'App\\Controller\\FilmController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/film']], [], [], []],
    'App\Controller\FilmController::delete' => [['id'], ['_controller' => 'App\\Controller\\FilmController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/film']], [], [], []],
    'App\Controller\RealisateurController::index' => [[], ['_controller' => 'App\\Controller\\RealisateurController::index'], [], [['text', '/realisateur']], [], [], []],
    'App\Controller\RealisateurController::new' => [[], ['_controller' => 'App\\Controller\\RealisateurController::new'], [], [['text', '/realisateur/new']], [], [], []],
    'App\Controller\RealisateurController::show' => [['id'], ['_controller' => 'App\\Controller\\RealisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/realisateur']], [], [], []],
    'App\Controller\RealisateurController::edit' => [['id'], ['_controller' => 'App\\Controller\\RealisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/realisateur']], [], [], []],
    'App\Controller\RealisateurController::delete' => [['id'], ['_controller' => 'App\\Controller\\RealisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/realisateur']], [], [], []],
    'App\Controller\UtilisateurController::index' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::index'], [], [['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::new' => [[], ['_controller' => 'App\\Controller\\UtilisateurController::new'], [], [['text', '/utilisateur/new']], [], [], []],
    'App\Controller\UtilisateurController::show' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::edit' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
    'App\Controller\UtilisateurController::delete' => [['id'], ['_controller' => 'App\\Controller\\UtilisateurController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/utilisateur']], [], [], []],
];