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
        'client_id' => '516696840418-0mus73h79ok56rs99fgvsh2u770nqeuh.apps.googleusercontent.com',
        'client_secret' => 'JK8q59Il10B_ZRtbAwofMtgB',
        'redirect' => 'https://kelola.dodinovembri.com/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '364352408333062',
        'client_secret' => 'c41911a2b4cec7ab1d2ccb4bddccad5b',
        'redirect' => 'https://kelola.dodinovembri.com/auth/facebook/callback',
    ],

    'twitter' => [
        'client_id' => 'A7r4yJYBE6i8YhnMY5fgHx0sJ',
        'client_secret' => '9FOEJK82ypzv1jZRypePDCqIeMPgXEIbHrKekBQMc1NmCE3PoA',
        'redirect' => 'https://kelola.dodinovembri.com/auth/twitter/callback',
    ],    

];
