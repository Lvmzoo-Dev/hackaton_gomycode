<?php

require_once 'functions/etudiantFunctions.php';
$etudiants = listerEtu();

foreach ($etudiants as $etu):

    $email = $etu['emailEtu'];
    $password = $etu['passwordEtu'];

endforeach;

if (isset($_POST['valider'])) {
    if ($email != $_POST['email'] || $password != $_POST['password']) {
?>
        <script>
            alert("VOUS N'ETES PAS SUR LA BASE DE DONNEES");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("VOUS ETES BIEN SUR LA BASE DE DONNEES");
        </script>
<?php
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
    <link rel="stylesheet" href="css/index.css">
</head>

<body>


    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>

    <div class="container">
        <img src="images/img2.png" alt="">
        <form action="" method="POST">
            <div class="form">
                <p>
                    Connectez-vous à votre compte <span>GoMyCode</span> Learn pour
                    continuer votre expérience d'apprentissage.
                </p>
                <nav>

                    <h2>CONNEXION</h2>
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
                        <a href="inscription.php" class="forgotpwd">Vous n'avez pas de compte ?</a>
                    </div>

                </nav>
            </div>
        </form>
    </div>

</body>

</html>