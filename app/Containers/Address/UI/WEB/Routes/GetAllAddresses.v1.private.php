<?php

/** @var Route $router */
$router->get('addresses', [
    'as' => 'web_address_index',
    'uses'  => 'Controller@index',
    'middleware' => [
      'auth:web',
    ],
]);
