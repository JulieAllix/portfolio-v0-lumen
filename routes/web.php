<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get(
    '/',
    [
        'uses' => 'MainController@home',
        'as'   => 'home'
    ]
);

$router->get(
    '/about',
    [
        'uses' => 'MainController@about',
        'as'   => 'about'
    ]
);

$router->get(
    '/training',
    [
        'uses' => 'MainController@training',
        'as'   => 'training'
    ]
);

$router->get(
    '/study-cards',
    [
        'uses' => 'MainController@studyCards',
        'as'   => 'study-cards'
    ]
);

$router->get(
    '/break-free',
    [
        'uses' => 'MainController@breakFree',
        'as'   => 'break-free'
    ]
);

$router->get(
    '/portfolio',
    [
        'uses' => 'MainController@portfolio',
        'as'   => 'portfolio'
    ]
);

$router->get(
    '/contact',
    [
        'uses' => 'MainController@contact',
        'as'   => 'contact'
    ]
);