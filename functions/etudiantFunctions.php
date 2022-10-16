<?php

function addEtu($nom, $prenom, $email, $password, $formation)
{
    global $db;
    $sql = "INSERT INTO etudiant 
            VALUES (NULL,'$nom','$prenom','$email','$password','$formation' )";
    $req = mysqli_query($db, $sql);
}
