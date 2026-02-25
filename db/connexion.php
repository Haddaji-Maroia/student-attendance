<?php

const PUBLIC_PATH = __DIR__;
const APP_PATH = PUBLIC_PATH.'/..';
const VENDOR_PATH = PUBLIC_PATH.'/../vendor';

require VENDOR_PATH.'/autoload.php';
dd('text');

$dotenv = Dotenv\Dotenv::createImmutable(APP_PATH);
$dotenv->load();


$host = $_ENV['DB_HOST'];
$db_name = $_ENV['DB_CONNECTION'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];
$charset = $_ENV['DB_CHARSET'];
$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Erreur de connexion : '.$e->getMessage();
}
