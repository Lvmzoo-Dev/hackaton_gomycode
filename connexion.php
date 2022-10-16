<?php

$host = 'localhost';
$user = 'root';
$password = '';
$bd = 'gomycode';
try {
    $db = mysqli_connect($host, $user, $password, $bd);
} catch (Exception $e) {
    exit("ERREUR DE CONNEXION A LA BASE DE DONNEES !!");
}
