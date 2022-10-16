<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOMYCODE - Dashboard Etudiant</title>
    <link rel="stylesheet" href="css/dashboardEtu.css">
</head>
<body>
    
    <?php

    // @include 'nav.php';

    ?>
    <div class="container">
        <div class="div-left">
            <div class="profil">
                <div class="user-profil"></div>
                <div class="user-infos">
                    <p class="nom">Nom</p>
                    <p class="prenom">Prenom</p>
                    <p style="font-weight: bold;">Etudiant</p>
                </div>
            </div>
            <div class="separation"></div>
            
            <nav>
                <ul>
                    <li><img src="images/home.png" class="icon" alt="">  <a href="#">Accueil</a></li>
                    <li><img src="images/cours.png" class="icon" alt="">  <a href="#">Cours</a></li>
                    <li><img src="images/prof.png" class="icon" alt="">  <a href="#">Professeur</a></li>
                    <li><img src="images/espace-etudiant.png" class="icon" alt="">  <a href="#">Espace Etudiant</a></li>
                    <li><img src="images/ecrire.png" class="icon" alt="">  <a href="#">Ecrire au Prof</a></li>
                </ul>
            </nav>

        </div>
        <div class="div-middle">
            <h2>Formation: <span></span></h2>
            <table border="1">
                <tr>
                    <th>Heures Totales</th>
                    <th>Suivies</th>
                    <th>Restantes</th>
                    <th>Niveau</th>
                </tr>
                <tr>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                    <td><?php  ?></td>
                </tr>
            </table>
            <h2 style="color: #BC0000;">COURS</h2>
            <div class="chapitre">
                <div class="headChapitre">
                    <p class="title">CHAPITRE 5</p>
                    <span class="statutChapitre">Terminée</span>
                </div>
                <p class="detailChapitre">
                    Lorem ipsum dolor sit amet consectetur <br>
                    adipisicing elit. Maxime, iusto pariatur
                </p>
                <a href="#" class="details">Details</a>
            </div>
        </div>
        <div class="div-right"></div>
    </div>

</body>
</html>