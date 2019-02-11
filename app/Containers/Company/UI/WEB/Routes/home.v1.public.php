<?php

/** @var Route $router */
$router->get('company', [
    'as' => 'web_company_show_company',
    'uses'  => 'Controller@showCompany',
//    'middleware' => [
//      'auth:web',
//    ],
]);
