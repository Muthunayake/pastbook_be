<?php

return [
    'allowed_origins' => [
        '*',
    ],

    'allowed_methods' => [
        'GET',
        'POST',
        'PUT',
        'DELETE',
        'OPTIONS',
    ],

    'allowed_headers' => [
        'Origin',
        'Content-Type',
        'Accept',
        'Authorization',
        'role ',
        'subdomain',
        'X-Requested-With',
        'resolution'
    ],
];
