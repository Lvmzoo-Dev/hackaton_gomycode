<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Etudiant</title>
    <link rel="stylesheet" href="css/EspaceEtudiant.css">
</head>
<body>
    
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
                    <li><img src="images/home.png" class="icon" alt="">  <a href="dashboardEtu.php">Accueil</a></li>
                    <li><img src="images/cours.png" class="icon" alt="">  <a href="#">Cours</a></li>
                    <li><img src="images/espace-etudiant.png" class="icon" alt="">  <a href="#">Espace Etudiant</a></li>
                    <li><img src="images/ecrire.png" class="icon" alt="">  <a href="#" onclick="openForm()">Ecrire au Prof</a></li>
                </ul>
            </nav>

        </div>
        <div class="div-middle">
            <h2>ESPACE ETUDIANTS</h2>
            <h1 class="team">TEAM GOMYCODE</h1>
            <div class="messageBox">
                <div class="elements">
                    <input type="text" name="messageText" placeholder="Entrer votre message ..." class="messageText" id="">
                    <button class="audio">
                        <img src="images/send.png" alt="">
                    </button>
                    <button class="audio">
                        <img src="images/microphone.png" alt="">
                    </button>
                </div>
            </div>
        </div>

        <div class="div-right"></div>
    </div>

    <!-- MESSAGE POP UP BOX -->
    <!-- STYLE -->
    <style>
        * {
            box-sizing: border-box;
        }

        .openBtn {
            display: flex;
            justify-content: left;
        }

        .openButton {
            border: none;
            border-radius: 5px;
            background-color: #1c87c9;
            color: white;
            padding: 14px 20px;
            cursor: pointer;
            position: fixed;
        }

        .loginPopup {
            position: relative;
            text-align: center;
            width: 100%;
        }

        .formPopup {
            display: none;
            position: fixed;
            left: 45%;
            top: 5%;
            transform: translate(-50%, 5%);
            border: 3px solid #999999;
            z-index: 9;
        }

        .formContainer {
            max-width: 300px;
            padding: 20px;
            background-color: #fff;
        }

        .formContainer input[type=text] {
            width: 100%;
            padding: 15px;
            margin: 5px 0 20px 0;
            border: none;
            background: white;
            border: 1px solid red;
            border-radius: 5px;
        }

        .formContainer .btn {
            padding: 12px 20px;
            border: none;
            background-color: #8ebf42;
            color: #fff;
            cursor: pointer;
            width: 100%;
            margin-bottom: 15px;
            opacity: 0.8;
        }

        .formContainer .cancel {
            background-color: #cc0000;
        }

        .formContainer .btn:hover,
        .openButton:hover {
            opacity: 1;
        }
    </style>
    <!-- FINSTYLE -->
    <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <form action="/action_page.php" class="formContainer">
                <h2>*** GOMYCHAT ***</h2>
                <br>
                <label for="message">
                    <strong>Votre Message: </strong>
                </label>
                <br>
                <input type="text" id="message" placeholder="Message..." name="message" required>
                <button type="submit" name="send" class="btn">Envoyer</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
            </form>
        </div>
    </div>
    <script>
        function openForm() {
            document.getElementById("popupForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("popupForm").style.display = "none";
        }
    </script>

</body>
</html>