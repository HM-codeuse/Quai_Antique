<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/category' => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/contact' => [
            [['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null],
            [['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::edit'], null, null, null, false, false, null],
        ],
        '/dishes' => [
            [['_route' => 'app_dishes', '_controller' => 'App\\Controller\\DishController::index'], null, null, null, false, false, null],
            [['_route' => 'dishes_list', '_controller' => 'App\\Controller\\DishController::list'], null, null, null, false, false, null],
        ],
        '/' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/menu' => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/dishes/add' => [[['_route' => 'dish_add', '_controller' => 'App\\Controller\\DishController::add'], null, null, null, false, false, null]],
        '/dishes/post' => [[['_route' => 'dish_post', '_controller' => 'App\\Controller\\DishController::post'], null, ['POST' => 0], null, false, false, null]],
        '/menus' => [[['_route' => 'menus_list', '_controller' => 'App\\Controller\\MenuController::list'], null, null, null, false, false, null]],
        '/menus/add' => [[['_route' => 'menu_add', '_controller' => 'App\\Controller\\MenuController::add'], null, null, null, false, false, null]],
        '/menus/post' => [[['_route' => 'menu_post', '_controller' => 'App\\Controller\\MenuController::post'], null, ['POST' => 0], null, false, false, null]],
        '/contact/post' => [[['_route' => 'contact_post', '_controller' => 'App\\Controller\\ContactController::post'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/reservation/(?'
                    .'|([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|add(*:64)'
                    .'|modify/([^/]++)(*:86)'
                    .'|post(*:97)'
                    .'|remove/([^/]++)(*:119)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                    .'|wdt/([^/]++)(*:179)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:225)'
                            .'|router(*:239)'
                            .'|exception(?'
                                .'|(*:259)'
                                .'|\\.css(*:272)'
                            .')'
                        .')'
                        .'|(*:282)'
                    .')'
                .')'
                .'|/dishes/(?'
                    .'|modify/([^/]++)(*:318)'
                    .'|remove/([^/]++)(*:341)'
                .')'
                .'|/menus/(?'
                    .'|modify/([^/]++)(*:375)'
                    .'|remove/([^/]++)(*:398)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'app_reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        64 => [[['_route' => 'reservation_add', '_controller' => 'App\\Controller\\ReservationController::add'], [], null, null, false, false, null]],
        86 => [[['_route' => 'reservation_modify', '_controller' => 'App\\Controller\\ReservationController::modify'], ['id'], null, null, false, true, null]],
        97 => [[['_route' => 'reservation_post', '_controller' => 'App\\Controller\\ReservationController::post'], [], ['POST' => 0], null, false, false, null]],
        119 => [[['_route' => 'reservation_remove', '_controller' => 'App\\Controller\\ReservationController::remove'], ['id'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        179 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        225 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        239 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        259 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        272 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        282 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        318 => [[['_route' => 'dish_modify', '_controller' => 'App\\Controller\\DishController::modify'], ['id'], null, null, false, true, null]],
        341 => [[['_route' => 'dish_remove', '_controller' => 'App\\Controller\\DishController::remove'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'menu_modify', '_controller' => 'App\\Controller\\MenuController::modify'], ['id'], null, null, false, true, null]],
        398 => [
            [['_route' => 'menu_remove', '_controller' => 'App\\Controller\\MenuController::remove'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
