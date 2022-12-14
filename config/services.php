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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    // 'name_demo' => [
    //     'client_id' => env('GITHUB_CLIENT_ID'),
    //     'client_secret' => env('GITHUB_CLIENT_SECRET'),
    //     'redirect' => 'http://example.com/callback-url',
    // ],

    'facebook' => [
        'client_id' => '740698167029714',
        'client_secret' => '02387d8551d325c0e4cf8b45bb074d7c',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'google' => [
        'client_id' => '67910159249-d888hlfpqiha50sgof80be1j0sjnjb94.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],

    'github' => [
        'client_id' => 'f0b4958a99a84b365c49',
        'client_secret' => '1a4db37c239c2f27fd96a7ad46f171c5ed5982e3',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];
