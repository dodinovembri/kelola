<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    
    'google' => [
        'client_id' => '270334257344-snsnq9pcnmm34elbt8uvbulfskffhu9e.apps.googleusercontent.com',
        'client_secret' => 'n2QddA6mg5cQdOYSKogbW-IU',
        'redirect' => 'http://localhost/projects/kelola/public/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '364352408333062',
        'client_secret' => 'c41911a2b4cec7ab1d2ccb4bddccad5b',
        'redirect' => 'http://localhost/projects/kelola/public/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'A7r4yJYBE6i8YhnMY5fgHx0sJ',
        'client_secret' => '9FOEJK82ypzv1jZRypePDCqIeMPgXEIbHrKekBQMc1NmCE3PoA',
        'redirect' => 'http://localhost/projects/kelola/public/auth/twitter/callback',
    ],

];
