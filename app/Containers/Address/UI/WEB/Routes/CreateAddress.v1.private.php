<?php

/** @var Route $router */
$router->get('addresses/create', [
    'as' => 'web_address_create',
    'uses'  => 'Controller@create',
//    'middleware' => [
//      'auth:web',
//    ],
]);
