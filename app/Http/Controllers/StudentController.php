<?php

function index(): void
{
    require MODELS_PATH . '/Student.php';
    $title = 'Tous les étudiants';
    $students = getAllStudents();
    include VIEWS_PATH . '/students/index.php';
}

