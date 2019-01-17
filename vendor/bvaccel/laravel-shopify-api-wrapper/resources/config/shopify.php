<?php

return [
    /**
     * ------------------------------------------------------|
     * Default Shopify Store                                 |
     * ------------------------------------------------------|
     */
    'default_store' => env('SHOPIFY_DEFAULT_STORE', 'primary'),

    'stores' => [
        'primary' => [
            'domain'   => env('SHOPIFY_DOMAIN'),
            'key'      => env('SHOPIFY_API_KEY'),
            'password' => env('SHOPIFY_API_PASSWORD'),
        ],
    ],
];