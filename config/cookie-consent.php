<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Cookie Name
    |--------------------------------------------------------------------------
    |
    | Here you may change the name of the cookie used to identify a session
    | instance by ID. The name specified here will get used every time a
    | new session cookie is created by the framework for every driver.
    |
    */

    'cookie_name' => 'cookie_consent',

    /*
    |--------------------------------------------------------------------------
    | Cookie Lifetime (Accept)
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of days you wish the accept cookie to
    | remain valid on the user's browser. This cookie is used to remember a
    | user's consent to the use of cookies on your website.
    |
    */
    'accept_cookie_lifetime' => 60 * 24 * 365,

    /*
    |--------------------------------------------------------------------------
    | Cookie Lifetime (Reject)
    |--------------------------------------------------------------------------
    |
    | Here you may specify the number of days you wish the reject cookie to
    | remain valid on the user's browser. This cookie is used to remember a
    | user's refusal to the use of cookies on your website.
    |
    */
    'reject_cookie_lifetime' => 60 * 24 * 30,
];
