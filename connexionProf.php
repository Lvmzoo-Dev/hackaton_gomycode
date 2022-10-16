<?php

require_once 'connexion.php';

if (isset($_POST['valider'])) {
    

    $mail = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM instructeur WHERE emailIns='$mail' AND passwordIns='$password'";
    $resultat = mysqli_query($db, $sql);
    $prof = mysqli_fetch_row($resultat);

    if($prof == null){
        ?>

            <script>
                alert("ERREUR DE LOGIN OU MOT DE PASSE");
            </script>

        <?php
    }else{
        session_start();
        $_SESSION['mail'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header("location:dashboardProf.php");
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOMYCODE - Connexion</title>
    <link rel="stylesheet" href="css/connexionProf.css">
</head>

<body>


    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>

    <div class="container">
        <img src="images/man2.png" alt="">
        <form action="" method="POST">
            <div class="form">
                <p>
                    Connectez-vous à votre compte <span>GoMyCode</span>.
                </p>
                <nav>

                    <h2>CONNEXION / PROF</h2>
                    <div class="content">

                        <div>
                            <label for="">Email *</label><br>
                            <input type="email" name="email" placeholder="Entrer votre email" autocomplete="off">
                        </div>
                        <div>
                            <label for="">Password *</label><br>
                            <input type="password" name="password" placeholder="Entrer votre mot de passe" autocomplete="off">
                        </div>

                        <button type="submit" name="valider" id="valider" class="btn">CONNEXION</button><br>
                        
                    </div>

                </nav>
            </div>
        </form>
    </div>

</body>

</html>