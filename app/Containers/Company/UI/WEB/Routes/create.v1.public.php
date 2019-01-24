<?php

/** @var Route $router */
$router->get('company/create', [
    'as' => 'web_company_create_company_action',
    'uses'  => 'Controller@showNewCompanyPage',
//    'middleware' => [
//      'auth:web',
//    ],
]);
