<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => env('FACEBOOK_ID'),         // Your GitHub Client ID
        'client_secret' => env('FACEBOOK_SECRET'), // Your GitHub Client Secret
        'redirect' =>env('FACEBOOK_REDIRECT_URL'),
    ],
    'google' => [
        'client_id' =>env('GOOGLE_ID'),         // Your GitHub Client ID
        'client_secret' =>env('GOOGLE_SECRET'), // Your GitHub Client Secret
        'redirect' => env('GOOGLE_REDIRECT_URL'),
    ],

    'linkedin' => [
        'client_id' =>env('LINKEDIN_ID'),         // Your GitHub Client ID
        'client_secret' =>env('LINKEDIN_SECRET'), // Your GitHub Client Secret
        'redirect' => env('LINKEDIN_REDIRECT_URL'),
    ],
];
