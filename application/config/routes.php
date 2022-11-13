<?php

    return [
        'add/user' => [
            'controller' => 'user',
            'action' => 'create-user',
            ],

        'users' => [
            'controller' => 'user',
            'action' => 'show-all-users',
        ],

        'user' => [
            'controller' => 'user',
            'action' => 'show-user',
        ],

        'add/dept' => [
            'controller' => 'dept',
            'action' => 'create-dept',
        ],

        'delete/dept' => [
            'controller' => 'dept',
            'action' => 'delete-dept',
        ],

        'depts' => [
            'controller' => 'dept',
            'action' => 'show-all-depts',
        ],
    ];