<?php

include_once 'connexion.php';

function listerEtu(){
    global $db;
    $sql = "SELECT * FROM etudiant";
    $req = mysqli_query($db, $sql);
    return $req;
}

function addEtu($nom, $prenom, $email, $password, $formation)
{
    global $db;
    $sql = "INSERT INTO etudiant 
            VALUES (NULL,'$nom','$prenom','$email','$password','$formation' )";
    $req = mysqli_query($db, $sql);
}
