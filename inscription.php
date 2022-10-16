<?php
require_once 'functions/formationFunctions.php';
require_once 'functions/etudiantFunctions.php';
$formations = getFormations();

if (isset($_POST['valider'])) {
    if ($_POST['password'] != $_POST['confMdp']) {
?>
        <script>
            alert("Erreur !!\n Les mots de passe sont différents");
        </script>
<?php } else {
        $name = $_POST['nom'];
        $firstName = $_POST['prenom'];
        $email = $_POST['email'];

        $password = $_POST['password'];
        $choixFormation = $_POST['formation'];
        addEtu($name, $firstName, $email, $password, $choixFormation);
        header('location:connexionEtu.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/inscription.css">
    <title>INSCRIPTION GOMYCODE</title>
</head>

<body>

    <div class="container">
        
        <div class="circle"></div>
        <img src="images/img3.png" alt="">
        <div class="form">
            <form action="" method="POST">
                <h1 align="center">Inscription</h1>

                <input type="text" name="nom" id="nom" placeholder="Nom..." autocomplete="off"><br>
                <input type="text" name="prenom" id="nom" placeholder="Prénom..." autocomplete="off"> <br>
                <input type="mail" id="nom" class="email" name="email" placeholder="Email..." autocomplete="off"> <br>
                <input type="password" id="nom" class="mdp" name="password" placeholder="Mot de passe..." autocomplete="off"> <br>
                <input type="password" id="nom" class="confMdp" name="confMdp" placeholder="Confirmer..." autocomplete="off"> <br>
                <select class="formation" name="formation" id="">
                    <option value="">Choisir Formation</option>
                    <?php
                    while ($tab = mysqli_fetch_row($formations)) { ?>
                        <option value="<?= $tab[0] ?>">
                            <?= $tab[1] ?>
                        </option>
                    <?php   } ?>
                </select>
                <button type="submit" name="valider" id="valider">VALIDER</button>
            </form>
        </div>
        <div></div>
    </div>

</body>

</html>