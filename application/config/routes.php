<?php

    return [

        'add/user' => [
            'controller' => 'user',
            'action' => 'addUser',
        ],

        'users' => [
            'controller' => 'user',
            'action' => 'showAllUsers',
        ],

        'user' => [
            'controller' => 'user',
            'action' => 'showUser',
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