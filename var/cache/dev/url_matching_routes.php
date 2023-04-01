<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/contact' => [
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::edit'], null, null, null, false, false, null],
        ],
        '/dishes' => [
            [['_route' => 'app_dishes', '_controller' => 'App\\Controller\\DishController::index'], null, null, null, false, false, null],
            [['_route' => 'dishes_list', '_controller' => 'App\\Controller\\DishController::list'], null, null, null, false, false, null],
        ],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/dishes/add' => [[['_route' => 'dish_add', '_controller' => 'App\\Controller\\DishController::add'], null, null, null, false, false, null]],
        '/dishes/post' => [[['_route' => 'dish_post', '_controller' => 'App\\Controller\\DishController::post'], null, ['POST' => 0], null, false, false, null]],
        '/menus' => [[['_route' => 'menus_list', '_controller' => 'App\\Controller\\MenuController::list'], null, null, null, false, false, null]],
        '/menus/add' => [[['_route' => 'menu_add', '_controller' => 'App\\Controller\\MenuController::add'], null, null, null, false, false, null]],
        '/menus/post' => [[['_route' => 'menu_post', '_controller' => 'App\\Controller\\MenuController::post'], null, ['POST' => 0], null, false, false, null]],
        '/reservation/add' => [[['_route' => 'reservation_add', '_controller' => 'App\\Controller\\ReservationController::add'], null, null, null, false, false, null]],
        '/reservation/post' => [[['_route' => 'reservation_post', '_controller' => 'App\\Controller\\ReservationController::post'], null, ['POST' => 0], null, false, false, null]],
        '/contact/post' => [[['_route' => 'contact_post', '_controller' => 'App\\Controller\\ContactController::post'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/dishes/(?'
                    .'|modify/([^/]++)(*:195)'
                    .'|remove/([^/]++)(*:218)'
                .')'
                .'|/menus/(?'
                    .'|modify/([^/]++)(*:252)'
                    .'|remove/([^/]++)(*:275)'
                .')'
                .'|/reservation/(?'
                    .'|modify/([^/]++)(*:315)'
                    .'|remove/([^/]++)(*:338)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'dish_modify', '_controller' => 'App\\Controller\\DishController::modify'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'dish_remove', '_controller' => 'App\\Controller\\DishController::remove'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'menu_modify', '_controller' => 'App\\Controller\\MenuController::modify'], ['id'], null, null, false, true, null]],
        275 => [[['_route' => 'menu_remove', '_controller' => 'App\\Controller\\MenuController::remove'], ['id'], null, null, false, true, null]],
        315 => [[['_route' => 'reservation_modify', '_controller' => 'App\\Controller\\ReservationController::modify'], ['id'], null, null, false, true, null]],
        338 => [
            [['_route' => 'reservation_remove', '_controller' => 'App\\Controller\\ReservationController::remove'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
