<?php


$host = 'localhost';
$user = 'root';
$password = 'root';
$bd = 'gomycode';

    try {
        $db = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_password);
        return $db;
    } catch (Exception $e) {
        echo "ERREUR DE CONNEXION A LA BASE DE DONNEES !!";
    }
}
