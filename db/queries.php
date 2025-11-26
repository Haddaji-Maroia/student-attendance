<?php
require_once 'connexion.php';


function getAllStudents()
{
    try {
        global $pdo;
        $stmt = $pdo->query('SELECT * FROM students');

        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    return null;
}
