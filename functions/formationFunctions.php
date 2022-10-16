<?php
require_once 'connexion.php';
function getFormations()
{
    global $db;
    $sql = "SELECT * FROM formation";
    $req = mysqli_query($db, $sql);
    return $req;
}
