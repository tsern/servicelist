<?php

/** @var Route $router */
$router->get('addresses/{id}/edit', [
    'as' => 'web_address_edit',
    'uses'  => 'Controller@edit',
    'middleware' => [
      'auth:web',
    ],
]);
