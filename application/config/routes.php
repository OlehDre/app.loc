<?php

    return [

        'add/user' => [
            'controller' => 'user',
            'action' => 'createUser',
        ],

        'users' => [
            'controller' => 'user',
            'action' => 'showAllUsers',
        ],

        'user' => [
            'controller' => 'user',
            'action' => 'showUser',
        ],

        'add/dept' => [
            'controller' => 'dept',
            'action' => 'createDept',
        ],

        'delete/dept' => [
            'controller' => 'dept',
            'action' => 'deleteDept',
        ],

        'depts' => [
            'controller' => 'dept',
            'action' => 'showAllDept',
        ],

        '' => [
            'controller' => 'main',
            'action' => 'index',
        ],
    ];