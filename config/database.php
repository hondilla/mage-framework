<?php declare(strict_types=1);

return [
    'default' => env('DB_CONNECTION', 'mysql'),
    'connections' => [
        'mysql' => [
            'password' => env('DB_PASSWORD', 'root'),
            'unix_socket' => env('DB_SOCKET', '/var/run/mysqld/mysqld.sock'),
        ],
    ],
    'redis' => [
        'default' => [
            'host' => env('REDIS_HOST', '/var/run/dragonfly/dragonfly.sock'),
            'port' => env('REDIS_PORT'),
        ],
        'cache' => [
            'host' => env('REDIS_HOST', '/var/run/dragonfly/dragonfly.sock'),
            'port' => env('REDIS_PORT'),
        ],
    ],
];
