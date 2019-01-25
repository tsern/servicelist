<?php

/** @var Route $router */
$router->get('company/delete/{id}', [
    'as' => 'web_company_delete',
    'uses'  => 'Controller@delete',
//    'middleware' => [
//      'auth:web',
//    ],
]);
