<?php

return [

    'view' => [
        'path' => '../views',
        'twig' => [
            'cache' => false,
            ]
         ],

    'displayErrorDetails' => true,
    'determineRouteBeforeAppMiddleware' => true,
    
    'db' => [
           'driver'    => 'mysql',
           'database'  => 'slim',
           'username'  => 'root',
           'password'  => 'acer',
           'charset' => 'utf8mb4',
           'collation' => 'utf8mb4_unicode_ci',
           'prefix'    => '',
        ]
];

