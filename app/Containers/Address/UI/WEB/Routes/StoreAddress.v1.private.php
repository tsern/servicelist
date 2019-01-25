<?php

/** @var Route $router */
$router->post('addresses/store', [
    'as' => 'web_address_store',
    'uses'  => 'Controller@store',
    'middleware' => [
      'auth:web',
    ],
]);
