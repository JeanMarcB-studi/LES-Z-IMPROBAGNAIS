<!DOCTYPE html>
<html lang="fr">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="_bootstrap/bootstrap.css">
  
  <!-- myCSS -->
  <link rel="stylesheet" href="CSS/style.css">
  
  <title>les Z'improbagnais : improvisation théâtrale à Aubagne</title>
  <meta name="description" content="Nous sommes une troupe d'amateurs de théâtre d'Improvisation basée sur Aubagne. Notre ambition : partager nos meilleurs délires avec vous.">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
  
<body class="bd-gray-700">

<!-- PHP FUNCTIONS -->
<?php require_once "PHP/biblio.php"; ?>

<!-- ---------------------- H  E  A  D  E  R ---------------------- -->
<header class="container-fluid p-0 position-relative m-0">
  <!-- HEADER IMAGE ON STAGE -->
  <div class="row g-0">
    <img class="img-fluid mx-0 " src="IMG/PhotoHead.JPG" alt="les Z'improbagnais photo Jean-Marc Boutaud" srcset=""> 
  </div>
  
  <!-- LOGO & TITLE -->
  <div class="row myVertical position-absolute g-3 align-items-center">
    <!-- LOGO  -->
    <div class="col-3">
      <div
      class="img rounded-circle myLogo m-auto p-0 turningLogo">
    </div>
    </div>
  
    <!-- TITLE  -->
    <div class="col-9">
      <div class="myTitle" >
        LES Z'IMPROBAGNAIS
      </div>       
    </div>
  </div>
</header>

<!-- NAVIGATION BAR -->
<nav class="navbar navbar-expand-sm navbar-dark sticky-top">
  <div class="container-fluid">
    
    <!-- B U T T O N  on MOBILE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- M E N U -->
    <nav class="py-0 mx-3 my-0 ms-auto">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav mb-2 mb-lg-0  bg-dark">
          <!-- ITEM 1 -->
          <li class="nav-item">
            <a class="nav-link p-2 myActive" id="Accueil" href="#">
              Accueil
            </a>
          </li>
          <!-- ITEM 2 -->
          <li class="nav-item">
            <a class="nav-link p-2" id="Spectacle" href="spectacles.php">
              Spectacles
            </a>
          </li>
          <!-- ITEM 3 -->
          <li class="nav-item">
            <a class="nav-link p-2" id="Contact" href="contact.php">
              Contact
            </a>
          </li>
          
        </ul>
      </div>
    </nav>
  </div>
</nav>
<!-- ---------------------- END  H  E  A  D  E  R ----------------- -->

<!-- -----------------------   M A I N  CONTENT   ----------------  -->
<main>
  
  <!-- PRESENT SITE Z -->
  <article class="container-md myWidth my-0">
    <h1>Bienvenus sur le site des Z'improbagnais !</h1>
    <div class="bg-gradient px-3 pt-2 rounded-1 my-4">      
      Soyez les bienvenus chers visiteurs ! <br> Nous sommes une troupe d'amateurs de théâtre d'Improvisation (asso loi 1901, fondée en 2017).<br>
      Notre envie : partager un moment ensemble régulièrement, nous perfectionner dans la pratique de l'improvisation, faire quelques stages avec des professionels dans une ambiance toujours conviviale et détendue et bien sûr : <br>
      présenter notre travail et nos folies à vous, cher public !
    </div>
  </article>

  
  
  <!-- ..........CAROUSSEL ............. -->
  <article class="container mt-5 myWidth">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        
        <!-- GET IMAGES -->
        <?= imagesCarousel() ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </article>
  
  AFFICHE 16 DEC 2022
  <article class="container-md my-5 w-70">
    <h2 class="text-center ">Notre dernier spectacle :</h2>
    <div class="my-4 mx-auto myWidthSmall">
      <img src="IMG/Affiche-2022-12-16.jpg" alt="affiche spectacle du 16/12/2022" class ="w-100" srcset="">
    </div>
  </article>
  
</main>
<!-- --------------------  end  M A I N  CONTENT   ---------------  -->


<!-- -----------------------        FOOTER        ----------------  -->
<footer>

<!-- CONTACT shortcut -->
<div class="container-md my-3 text-center">
  <i class="bi bi-envelope"></i>
  <a href="contact.php" >Nous contacter</a>
</div>

<!-- copyright -->
<div class="container-md my-3 text-center">
  <i class="bi bi-c-circle"></i>
  2023 - LES Z'IMPROBAGNAIS
</div>

</footer>
<!-- -----------------------    end FOOTER        ----------------  -->




<!-- ........................ THIS IS THE END :o) ............................... -->
<!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>