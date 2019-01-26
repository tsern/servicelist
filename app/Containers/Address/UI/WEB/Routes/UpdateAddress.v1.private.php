<?php

/** @var Route $router */
$router->post('addresses/update/{id}', [
    'as' => 'web_address_update',
    'uses'  => 'Controller@update',
//    'middleware' => [
//      'auth:web',
//    ],
]);
