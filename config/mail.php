<?php declare(strict_types=1);

return [
    'default' => env('MAIL_MAILER', 'mailpit'),
    'mailers' => [
        'mailpit' => [
            'transport' => 'smtp',
            'host' => 'mailpit.localhost',
            'port' => 1025
        ],
    ],
];
