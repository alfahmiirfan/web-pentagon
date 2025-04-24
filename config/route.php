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
            'add-action' => 'admin.activity.add.action',
            'edit' => 'admin.activity.edit',
            'edit-action' => 'admin.activity.edit.action',
            'delete-action' => 'admin.activity.delete.action',
        ],

        'facility' => [
            'base' => 'admin.facility.*',

            'home' => 'admin.facility.home',
            'add' => 'admin.facility.add',
            'add-action' => 'admin.facility.add.action',
            'edit' => 'admin.facility.edit',
            'edit-action' => 'admin.facility.edit.action',
            'delete-action' => 'admin.facility.delete.action',
        ],

        'information' => [
            'base' => 'admin.information.*',

            'home' => 'admin.information.home',
            'add' => 'admin.information.add',
        ],

        'event' => [
            'base' => 'admin.event.*',

            'home' => 'admin.event.home',
            'add' => 'admin.event.add',
        ],

        'ptk' => [
            'base' => 'admin.ptk.*',

            'home' => 'admin.ptk.home',
            'add' => 'admin.ptk.add',
        ],

        'achievement' => [
            'base' => 'admin.achievement.*',

            'home' => 'admin.achievement.home',
            'add' => 'admin.achievement.add',
        ],

        'alumni' => [
            'base' => 'admin.alumni.*',

            'home' => 'admin.alumni.home',
            'add' => 'admin.alumni.add',
        ],

    ],

];
