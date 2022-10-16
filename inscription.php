<?php
require_once 'functions/formationFunctions.php';
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
        $tel = $_POST['numTel'];
        $password = $_POST['password'];
        $choixFormation = $_POST['formation'];
        echo "Nom: " . $name .
            "\nPrénom: " . $firstName .
            "Email: " . $email .
            "tel: " . $tel .
            "Formation: " . $choixFormation;;
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
        <div class="logo">
            <span>
                <img src="images/logo2.png" alt="">
            </span>
            <br>
            <span>
                <img src="images/man.jpg" width="550" height="700" alt="">
            </span>
        </div>
        <div class="form">
            <form action="" method="POST">
                <h1 align="center">Inscription</h1>
                <label for="">NOM</label>
                &nbsp;&nbsp;&nbsp; <input type="text" name="nom" id="nom" placeholder="Nom...">
                &nbsp;&nbsp;&nbsp;<label for="">PRENOM</label>
                &nbsp;&nbsp;&nbsp; <input type="text" name="prenom" id="nom" placeholder="Prénom..."> <br>
                <label for="">Numéro de Téléphone</label>
                <input type="number" id="nom" name="numTel" class="tel" placeholder="Numéro de téléphone..."> <br>
                <label for="">Email</label>
                <input type="mail" id="nom" class="email" name="email" placeholder="Email..."> <br>
                <label for="">MOT DE PASSE</label>
                <input type="password" id="nom" class="mdp" name="password" placeholder="Mot de passe..."> <br>
                <label for="">CONFIRMER</label>
                <input type="password" id="nom" class="confMdp" name="confMdp" placeholder="Confirmer..."> <br>
                <label for="">CHOIX FORMATION</label>
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