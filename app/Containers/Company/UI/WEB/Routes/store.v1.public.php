<?php

/** @var Route $router */
$router->post('company/store', [
    'as' => 'web_company_store',
    'uses'  => 'Controller@store',
//    'middleware' => [
//      'auth:web',
//    ],
]);
