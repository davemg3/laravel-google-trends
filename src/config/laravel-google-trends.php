<?php

return array(
    /*
    |--------------------------------------------------------------------------
    | Google account username
    |--------------------------------------------------------------------------
    |
    */
    'username' =>  env('USERNAME', 'myname'),

    /*
    |--------------------------------------------------------------------------
    | Google account password
    |--------------------------------------------------------------------------
    |
    */
    'password' => env('PASSWORD', 'mypassword'),

    /*
    |--------------------------------------------------------------------------
    | Google recovery email
    |--------------------------------------------------------------------------
    |
    */
    'recovery-email' => env('RECOVERY_MAIL', 'mymail'),

    /*
    |--------------------------------------------------------------------------
    | API call Cache lifetime
    |--------------------------------------------------------------------------
    |
    | The amount of time (in minutes) Google Trends API responses will be cached.
    | If you set this to zero, the responses won't be cached at all.
    |
    */
    'api-call-cache-lifetime' => 60 * 24,

    /*
    |--------------------------------------------------------------------------
    | Session Cache lifetime
    |--------------------------------------------------------------------------
    |
    | The amount of time (in minutes) the Google Session cookies will be cached.
    | If you set this to zero, the session won't be cached at all.
    |
    */
    'session-cache-lifetime' => 60 * 48,
);
