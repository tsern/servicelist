<?php

/** @var Route $router */
$router->patch('addresses/{id}', [
    'as' => 'web_address_update',
    'uses'  => 'Controller@update',
    'middleware' => [
      'auth:web',
    ],
]);
