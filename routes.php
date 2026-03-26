<?php
return [
    // Affichage page home
    [
        'url' => '/',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\PageController::class,
            'home',
        ]
    ],

    // Affichage liste des présences
    [
        'url' => '/presences',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\AttendanceController::class,
            'index',
        ]
    ],

    [
        'url' => '/etudiants',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'index',
        ]
    ],

    [
        'url' => '/etudiants',
        'method' => 'post',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'store'
        ],
    ],

    // Devoir pour afficher la fiche d'étudiant
    [
        'url' => '/etudiant',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'show',
        ]
    ],

    [
        'url' => '/etudiants/create',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'create',
        ]
    ],

    [
        'url' => '/etudiant/edit',
        'method' => 'get',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'edit',
        ]
    ],

    [
        'url' => '/etudiant',
        'method' => 'put',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'update',
        ]
    ],
];