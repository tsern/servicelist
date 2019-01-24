<?php

/** @var Route $router */
$router->get('company/index', [
    'as' => 'web_company_get_all_companies_action',
    'uses'  => 'Controller@index',
//    'middleware' => [
//      'auth:web',
//    ],
]);
