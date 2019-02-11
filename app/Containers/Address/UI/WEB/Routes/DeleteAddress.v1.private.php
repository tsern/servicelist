<?php

/** @var Route $router */
$router->post('addresses/delete/{id}', [
    'as' => 'web_address_delete',
    'uses'  => 'Controller@delete',
//    'middleware' => [
//      'auth:web',
//    ],
]);
