<?php

/** @var Route $router */
$router->post('company/update/{id}', [
    'as' => 'web_company_update',
    'uses'  => 'Controller@update',
//    'middleware' => [
//      'auth:web',
//    ],
]);
