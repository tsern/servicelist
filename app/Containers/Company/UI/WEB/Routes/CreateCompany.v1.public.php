<?php

/** @var Route $router */
$router->post('company/create', [
    'as' => 'web_company_create_new_company',
    'uses'  => 'Controller@createNewCompany',
    'middleware' => [
      'auth:web',
    ],
]);
