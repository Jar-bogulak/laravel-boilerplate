<?php

/**
 * All configuration options for Laravel Boilerplate
 * http://laravel-boilerplate.com.
 */

return [
    /*
    |--------------------------------------------------------------------------
    | Access
    |--------------------------------------------------------------------------
    |
    | Configurations related to the boilerplate's access/authorization options
    */
    'access' => [
        'options' => [

            /*
             * Whether or not a user can change their email address after
             * their account has already been created
             */
            'change_email' => env('CHANGE_EMAIL', false),

            /*
             * Use the homeRoute() helper to determine where to send the user after login based on their status
             * If false the frontend.index route will be used
             */
            'redirect' => true,

            /*
             * Whether or not the register route and view are active
             */
            'registration' => env('ENABLE_REGISTRATION', true),

            /*
             * When active, a user can only have one session active at a time
             * That is all other sessions for that user will be deleted when they log in
             * (They can only be logged into one place at a time, all others will be logged out)
             * AuthenticateSession middleware must be enabled
             */
            'single_login' => env('SINGLE_LOGIN', true),
        ],

        'users' => [
            /**
             * Whether or not a user can be permanently deleted from the system via the backend
             * The regular delete button will still exist, and will soft delete the user
             * but the permanently deleted button on the 'deleted users' screen will be hidden.
             */
            'permanently_delete' => false,
        ],

        'roles' => [

            /*
             * The ID of the administrator role
             * Should be 1 by design
             * It is not recommended to change
             */
            'admin' => 1,

            /*
             * The ID of the default role to give newly registered users
             */
            'default' => 2,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Google Analytics
    |--------------------------------------------------------------------------
    |
    | Found in views/includes/partials/ga.blade.php
    */
    'google-analytics' => env('GOOGLE_ANALYTICS', 'UA-XXXXX-X'),

    /*
    |--------------------------------------------------------------------------
    | Avatar
    |--------------------------------------------------------------------------
    |
    | Configurations related to the boilerplate's avatar system
    */
    'avatar' => [

        /*
         * Default size of the avatar if none is supplied
         */
        'size' => 80,
    ],

    /*
    |--------------------------------------------------------------------------
    | Locale
    |--------------------------------------------------------------------------
    |
    | Configurations related to the boilerplate's locale system
    */
    'locale' => [
        /*
         * Whether or not to show the language picker, or just default to the default
         * locale specified in the app config file
         */
        'status' => true,

        /*
         * Available languages
         *
         * Add your language code to this array.
         * The code must have the same name as the language folder.
         * Be sure to add the new language in an alphabetical order.
         *
         * The language picker will not be available if there is only one language option
         * Commenting out languages will make them unavailable to the user
         */
        'languages' => [
            'ar' => ['name' => 'Arabic', 'rtl' => true],
            'az' => ['name' => 'Azerbaijan', 'rtl' => false],
            'zh' => ['name' => 'Chinese Simplified', 'rtl' => false],
            'zh-TW' => ['name' => 'Chinese Traditional', 'rtl' => false],
            'da' => ['name' => 'Danish', 'rtl' => false],
            'de' => ['name' => 'German', 'rtl' => false],
            'el' => ['name' => 'Greek', 'rtl' => false],
            'en' => ['name' => 'English', 'rtl' => false],
            'es' => ['name' => 'Spanish', 'rtl' => false],
            'fa' => ['name' => 'Persian', 'rtl' => true],
            'fr' => ['name' => 'French', 'rtl' => false],
            'he' => ['name' => 'Hebrew', 'rtl' => true],
            'id' => ['name' => 'Indonesian', 'rtl' => false],
            'it' => ['name' => 'Italian', 'rtl' => false],
            'ja' => ['name' => 'Japanese', 'rtl' => false],
            'nl' => ['name' => 'Dutch', 'rtl' => false],
            'no' => ['name' => 'Norwegian', 'rtl' => false],
            'pt_BR' => ['name' => 'Brazilian Portuguese', 'rtl' => false],
            'ru' => ['name' => 'Russian', 'rtl' => false],
            'sv' => ['name' => 'Swedish', 'rtl' => false],
            'th' => ['name' => 'Thai', 'rtl' => false],
            'tr' => ['name' => 'Turkish', 'rtl' => false],
            'uk' => ['name' => 'Ukrainian', 'rtl' => false],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Testing Mode
    |--------------------------------------------------------------------------
    |
    | When your application is currently running tests
    |
    */
    'testing' => env('APP_TESTING', false),
];
