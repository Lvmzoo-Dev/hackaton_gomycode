<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <link rel="stylesheet" href="css/dashboardProf.css">

</head>

<body>

   <header class="header">
   
   <section class="flex">

      <a href="dashboardProf.php" class="logo"><img src="images/logo.png" alt=""></a>

      <form action="" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="Chercher cours..." maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="search-btn" class="fas fa-search"></div>
         <a href="connexionProf.php"><div id="user-btn" class="fas fa-user"></div></a>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Prof 1</h3>
      <p class="role">Enseignant</p>
      <a href="#" class="btn">Voir profile</a>
   </div>

   <nav class="navbar">
      <a href="#"><i class="fas fa-home"></i><span>Accueil</span></a>
      <a href="#"><i class="fas fa-graduation-cap"></i><span>cours</span></a>
      <a href="#"><i class="fas fa-envelope"></i><span>Messagerie</span></a>
   </nav>

</div>

<section class="about">

   <div class="row">

      

   </div>

</section> 

<section class="reviews">

   <h1 class="heading">VUE D'ENSEMBLE</h1>

   <div class="box-container">

      <div class="box">
         <div class="title1">MES COURS</div>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <button class="voir">Voir</button>
         </div>
      </div>

      <div class="box">
      <div class="title2">NOUVEAUX MESSAGES</div>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <button class="voir">Voir</button>
         </div>
      </div>

      <div class="box">
         <div class="title3">SUPPORT DE COURS </div>
         <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus, suscipit a. Quibusdam, dignissimos consectetur. Sed ullam iusto eveniet qui aut quibusdam vero voluptate libero facilis fuga. Eligendi eaque molestiae modi?</p>
         <div class="student">
            <button class="voir">Voir</button>
         </div>
      </div>

   </div>

</section>



<footer class="footer">

   &copy; copyright @ 2022 by <span>GOMYCODE</span> | tout les droits sont réserver!

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>

</html>