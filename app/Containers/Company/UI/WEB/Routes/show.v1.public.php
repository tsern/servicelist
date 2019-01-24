<?php

/** @var Route $router */
$router->get('company/show/{id}', [
    'as' => 'web_company_show',
    'uses'  => 'Controller@show',
//    'middleware' => [
//      'auth:web',
//    ],
]);
