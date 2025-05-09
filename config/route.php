<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Route Name
    |--------------------------------------------------------------------------
    */

    'landing' => [
        'home' => 'home',
        'about' => 'about.*',
        'about-profile' => 'about.profile',
        'about-ptk' => 'about.ptk.*',
        'about-ptk-home' => 'about.ptk.home',
        'about-ptk-detail' => 'about.ptk.detail',
        'program' => 'program',
        'achievement' => 'achievement.*',
        'achievement-home' => 'achievement.home',
        'achievement-detail' => 'achievement.detail',
        'gallery' => 'gallery',
        'alumni' => 'alumni.*',
        'alumni-home' => 'alumni.home',
        'alumni-detail' => 'alumni.detail',
        'information' => 'information.*',
        'information-home' => 'information.home',
        'information-detail' => 'information.detail',
    ],

    'auth' => [
        'login' => 'login',
        'login-action' => 'login.action',
        'logout' => 'logout',
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
            'add-action' => 'admin.information.add.action',
            'edit' => 'admin.information.edit',
            'edit-action' => 'admin.information.edit.action',
            'delete-action' => 'admin.information.delete.action',

            'number' => [
                'toggle' => 'admin.event.number.toggle',
                'change' => 'admin.event.number.change',
            ],
        ],

        'event' => [
            'base' => 'admin.event.*',

            'home' => 'admin.event.home',
            'add' => 'admin.event.add',
            'add-action' => 'admin.event.add.action',
            'edit' => 'admin.event.edit',
            'edit-action' => 'admin.event.edit.action',
            'delete-action' => 'admin.event.delete.action',
        ],

        'ptk' => [
            'base' => 'admin.ptk.*',

            'home' => 'admin.ptk.home',
            'add' => 'admin.ptk.add',
            'add-action' => 'admin.ptk.add.action',
            'edit' => 'admin.ptk.edit',
            'edit-action' => 'admin.ptk.edit.action',
            'delete-action' => 'admin.ptk.delete.action',
        ],

        'achievement' => [
            'base' => 'admin.achievement.*',

            'home' => 'admin.achievement.home',
            'add' => 'admin.achievement.add',
            'add-action' => 'admin.achievement.add.action',
            'edit' => 'admin.achievement.edit',
            'edit-action' => 'admin.achievement.edit.action',
            'delete-action' => 'admin.achievement.delete.action',
        ],

        'alumni' => [
            'base' => 'admin.alumni.*',

            'home' => 'admin.alumni.home',
            'add' => 'admin.alumni.add',
            'add-action' => 'admin.alumni.add.action',
            'edit' => 'admin.alumni.edit',
            'edit-action' => 'admin.alumni.edit.action',
            'delete-action' => 'admin.alumni.delete.action',
        ],

    ],

];
