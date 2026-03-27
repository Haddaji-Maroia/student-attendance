<?php

use Tecgdcs\Router;
use Illuminate\Database\Capsule\Manager as Capsule;


session_start();

require __DIR__ . '/../bootstrap/app.php';


require VENDOR_PATH . '/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();

//creo una nuova capsula
$capsule = new Capsule;

//aggiungo la connessione
$capsule->addConnection([
    'driver' => env('DB_CONNECTION'),
    'host' => env('DB_HOST'),
    'database' => env('DB_DATABASE'),
    'username' => env('DB_USERNAME'),
    'password' => env('DB_PASSWORD'),
    'charset' => env('DB_CHARSET'),
    'collation' => env('DB_COLLATION'),
    'prefix' => '',
]);

//accetto che la mia capsula è globale
$capsule->setAsGlobal();

//Je démarre eloquent
$capsule->bootEloquent();


(new Router())->route();