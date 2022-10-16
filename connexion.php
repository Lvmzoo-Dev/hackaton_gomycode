<?php


$host = 'localhost';
$user = 'root';
$password = 'root';
$bd = 'gomycode';

try {
    $db = mysqli_connect($host, $user, $password, $bd);
    // echo "connexion réussi";
} catch (Exception $e) {
    echo "ERREUR DE CONNEXION A LA BASE DE DONNEES !!";
}
