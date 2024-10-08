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
    'app_author' => [[], ['_controller' => 'App\\Controller\\AuthorController::index'], [], [['text', '/author']], [], [], []],
    'app_showAuthor' => [['name'], ['_controller' => 'App\\Controller\\AuthorController::showAuthor'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/showAuthor']], [], [], []],
    'app_showlist' => [[], ['_controller' => 'App\\Controller\\AuthorController::list'], [], [['text', '/showlist']], [], [], []],
    'app_authorDetails' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::auhtorDetails»'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/auhtorDetails']], [], [], []],
    'app_Affiche' => [[], ['_controller' => 'App\\Controller\\AuthorController::Affiche'], [], [['text', '/Affiche']], [], [], []],
    'app_Add' => [[], ['_controller' => 'App\\Controller\\AuthorController::Add'], [], [['text', '/Add']], [], [], []],
    'app_edit' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit']], [], [], []],
    'app_delete' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'app_AddStatistique' => [[], ['_controller' => 'App\\Controller\\AuthorController::addStatistique'], [], [['text', '/AddStatistique']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'app_affiche' => [[], ['_controller' => 'App\\Controller\\HomeController::Affiche'], [], [['text', '/affiche']], [], [], []],
    'app_service' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service']], [], [], []],
    'app_showService' => [['name'], ['_controller' => 'App\\Controller\\ServiceController::showService'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/showService']], [], [], []],
    'App\Controller\AuthorController::index' => [[], ['_controller' => 'App\\Controller\\AuthorController::index'], [], [['text', '/author']], [], [], []],
    'App\Controller\AuthorController::showAuthor' => [['name'], ['_controller' => 'App\\Controller\\AuthorController::showAuthor'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/showAuthor']], [], [], []],
    'App\Controller\AuthorController::list' => [[], ['_controller' => 'App\\Controller\\AuthorController::list'], [], [['text', '/showlist']], [], [], []],
    'App\Controller\AuthorController::auhtorDetails»' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::auhtorDetails»'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/auhtorDetails']], [], [], []],
    'App\Controller\AuthorController::Affiche' => [[], ['_controller' => 'App\\Controller\\AuthorController::Affiche'], [], [['text', '/Affiche']], [], [], []],
    'App\Controller\AuthorController::Add' => [[], ['_controller' => 'App\\Controller\\AuthorController::Add'], [], [['text', '/Add']], [], [], []],
    'App\Controller\AuthorController::edit' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit']], [], [], []],
    'App\Controller\AuthorController::delete' => [['id'], ['_controller' => 'App\\Controller\\AuthorController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/delete']], [], [], []],
    'App\Controller\AuthorController::addStatistique' => [[], ['_controller' => 'App\\Controller\\AuthorController::addStatistique'], [], [['text', '/AddStatistique']], [], [], []],
    'App\Controller\HomeController::index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/home']], [], [], []],
    'App\Controller\HomeController::Affiche' => [[], ['_controller' => 'App\\Controller\\HomeController::Affiche'], [], [['text', '/affiche']], [], [], []],
    'App\Controller\ServiceController::index' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service']], [], [], []],
    'App\Controller\ServiceController::showService' => [['name'], ['_controller' => 'App\\Controller\\ServiceController::showService'], [], [['variable', '/', '[^/]++', 'name', true], ['text', '/showService']], [], [], []],
];
