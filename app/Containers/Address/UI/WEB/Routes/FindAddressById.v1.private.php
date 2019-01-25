<?php

/** @var Route $router */
$router->get('addresses/{id}', [
    'as' => 'web_address_show',
    'uses'  => 'Controller@show',
    'middleware' => [
      'auth:web',
    ],
]);
