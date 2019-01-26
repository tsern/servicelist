<?php

/** @var Route $router */
$router->get('addresses/delete/{id}', [
    'as' => 'web_address_delete',
    'uses'  => 'Controller@delete',
//    'middleware' => [
//      'auth:web',
//    ],
]);
