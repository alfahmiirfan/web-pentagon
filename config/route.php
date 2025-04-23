<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Route Name
    |--------------------------------------------------------------------------
    */

    'landing' => [
        'home' => 'home',
        'program' => 'program',
    ],

    'admin' => [

        'dashboard' => [
            'home' => 'dashboard',
        ],

        'activity' => [
            'base' => 'admin.activity.*',

            'home' => 'admin.activity.home',
            'add' => 'admin.activity.add',
        ],

        'facility' => [
            'base' => 'admin.facility.*',

            'home' => 'admin.facility.home',
            'add' => 'admin.facility.add',
        ],

    ],

];
