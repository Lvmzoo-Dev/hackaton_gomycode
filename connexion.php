<?php

function pdo_connect_mysql()
{
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'gomycode';

    try {
        $db = new PDO("mysql:host=" . $db_host . ";dbname=" . $db_name, $db_user, $db_password);
        return $db;
    } catch (Exception $e) {
        exit("ERREUR DE CONNEXION A LA BASE DE DONNEES !!");
    }
}
