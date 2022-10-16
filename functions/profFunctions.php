<?php

function listerProf()
{
    global $db;
    $sql = "SELECT * FROM instructeur";
    $req = mysqli_query($db, $sql);
    return $req;
}
