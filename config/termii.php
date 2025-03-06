<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Termii API Key
    |--------------------------------------------------------------------------
    |
    | Your Termii API key. This is required for authentication with Termii's API.
    |
    */
    'api_key' => env('TERMII_API_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Sender ID
    |--------------------------------------------------------------------------
    |
    | The default sender ID to use for messages sent through Termii.
    |
    */
    'sender_id' => env('TERMII_SENDER_ID', 'LaraTermii'),
];
