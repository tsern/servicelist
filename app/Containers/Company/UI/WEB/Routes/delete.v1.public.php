<?php

/** @var Route $router */
$router->post('company/delete/{id}', [
    'as' => 'web_company_delete',
    'uses'  => 'Controller@delete',
//    'middleware' => [
//      'auth:web',
//    ],
]);
