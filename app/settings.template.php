<?php
return [
    'settings' => [
        // Slim settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,

        // View settings
        'view' => [
            'template_path' => __DIR__ . '/templates',
            'smarty' => [
                'cacheDir' => __DIR__ . '/../cache/smarty/cache',
                'compileDir' => __DIR__ . '/../cache/smarty/compile',
            ],
        ],

        // Doctrine
        'doctrine' => [
            'model' => __DIR__ . '/src/Model',
            'cache_proxy' => __DIR__ . '/../cache/doctrine',
        ],

        // DB Conection
        'db' => [
            'driver' => 'pdo_mysql',
            'user' => 'USER',
            'password' => 'PASS',
            'dbname' => 'DBNAME',
        ],

        //Integra
        'integra' => [
            'token' => 'TOKEN_HERE',
        ],

    ],
];
