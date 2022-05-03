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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about_index', '_controller' => 'App\\Controller\\AboutController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/article' => [[['_route' => 'article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/contact' => [[['_route' => 'contact_index', '_controller' => 'App\\Controller\\ContactController::index'], null, ['GET' => 0], null, true, false, null]],
        '/gallery' => [[['_route' => 'gallery_index', '_controller' => 'App\\Controller\\GalleryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/homepage' => [[['_route' => 'homepage_index', '_controller' => 'App\\Controller\\HomepageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/homepage/page1' => [[['_route' => 'homepage_show', '_controller' => 'App\\Controller\\HomepageController::show'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::reg'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'services_index', '_controller' => 'App\\Controller\\ServicesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/video' => [[['_route' => 'video_index', '_controller' => 'App\\Controller\\VideoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'welcome', '_controller' => 'App\\Controller\\WelcomeController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|bout/([^/]++)(*:186)'
                    .'|rticle/([^/]++)(*:209)'
                .')'
                .'|/contact/([^/]++)(*:235)'
                .'|/gallery/([^/]++)(*:260)'
                .'|/services/([^/]++)(*:286)'
                .'|/video/([^/]++)(*:309)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        186 => [[['_route' => 'about_show', '_controller' => 'App\\Controller\\AboutController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        209 => [[['_route' => 'article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        235 => [[['_route' => 'contact_show', '_controller' => 'App\\Controller\\ContactController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'gallery_show', '_controller' => 'App\\Controller\\GalleryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        286 => [[['_route' => 'services_show', '_controller' => 'App\\Controller\\ServicesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        309 => [
            [['_route' => 'video_show', '_controller' => 'App\\Controller\\VideoController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
