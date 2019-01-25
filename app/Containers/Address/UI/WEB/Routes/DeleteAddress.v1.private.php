<?php

/** @var Route $router */
$router->delete('addresses/{id}', [
    'as' => 'web_address_delete',
    'uses'  => 'Controller@delete',
    'middleware' => [
      'auth:web',
    ],
]);
