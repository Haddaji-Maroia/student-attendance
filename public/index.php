<?php

const PUBLIC_PATH = __DIR__;

const APP_PATH = PUBLIC_PATH.'/..';
const VENDOR_PATH = PUBLIC_PATH.'/../vendor';
const VIEWS_DIR = PUBLIC_PATH.'/../views';

require VENDOR_PATH.'/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(APP_PATH);
$dotenv->load();

include '../db/queries.php';

$title = '';

switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        $title = 'Page d’accueil';
        include '../views/home.php';
        break;
    case '/presences':
        $title = 'Prendre les présences';
        include '../views/attendances/index.php';
        break;
    case '/etudiants':
        $title = 'Tous les étudiants';
        include '../views/students/index.php';
        break;
    default:
        $title = '404';
        include '../views/404.php';
}
