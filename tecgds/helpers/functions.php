<?php

if (! function_exists('dd')) {
    function dd($var)
    {
        var_dump($var);
        exit();

    }
}

if (! function_exists('env')) {
    function env(string $key, $default = null): mixed
    {
        return $_ENV[$key] ?? $default;
    }
}


if (! function_exists('db_connection')){
    function db_connection(): ?PDO
    {
        $connection = $_ENV['DB_CONNECTION'];
        $host = $_ENV['DB_HOST'];
        $db_name = $_ENV['DB_DATABASE'];
        $user = $_ENV['DB_USERNAME'];
        $pass = $_ENV['DB_PASSWORD'];
        $charset = $_ENV['DB_CHARSET'];
        $dsn = "$connection:host=$host;dbname=$db_name;charset=$charset";

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            return $pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : '.$e->getMessage();
        }

        return  null;

    }
}

if (!function_exists('view')){
    function view(string $name, array $data = [] ): void
    {
        $name = str_replace('.', '/', $name);
        $view = VIEWS_PATH . '/' . $name . '.php';
        if (file_exists($view)){
            extract($data);
            include $view;
        } else{
            die('La vue n existe pas');
        }

    }
}

if (!function_exists('csrf_token')){
    function csrf_token(int $length = 32): string
    {
        return $_SESSION['token'] = bin2hex(random_bytes($length));


    }
}