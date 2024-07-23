<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Asset URL
    |--------------------------------------------------------------------------
    |
    | This configuration option allows you to specify the base URL that should
    | be used when referencing Vite assets in your application. By default,
    | this value will be null, meaning the asset URL will be relative.
    |
    */

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Vite Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may define the configuration options that should be passed to
    | the Vite integration. These options will be used when generating the
    | necessary scripts and styles to include the Vite assets in your views.
    |
    */

    'config' => [
        'input' => [
            'resources/js/app.js',
            'resources/css/app.css',
        ],
        'refresh' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Development Server URL
    |--------------------------------------------------------------------------
    |
    | This configuration option allows you to specify the development server
    | URL that Vite should connect to. This URL is typically used to serve
    | your assets during local development and should be updated accordingly.
    |
    */

    'server_url' => env('VITE_SERVER_URL', 'http://localhost:3000'),

    /*
    |--------------------------------------------------------------------------
    | Additional Attributes
    |--------------------------------------------------------------------------
    |
    | Here you may specify additional attributes that should be added to the
    | generated script and style tags. These attributes will be used when
    | the tags are rendered within your application's views and layouts.
    |
    */

    'attributes' => [
        'scripts' => [],
        'styles' => [],
    ],

];
