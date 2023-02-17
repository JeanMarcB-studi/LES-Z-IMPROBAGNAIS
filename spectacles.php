
<!-- PHP FUNCTIONS -->
<?php require_once "PHP/biblio.php"; ?>

<!DOCTYPE html>
<html lang="fr">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <!-- myCSS -->
  <link rel="stylesheet" href="CSS/style.css">
  
  <title>les Zimprobagnais : nos spectacles de théâtre sur Aubagne</title>
  <meta name="description" content="Troupe d'amateurs de théâtre d'improvisation : pour tout savoir sur nos prochains spectacles autour d'Aubagne, cette page est faite pour vous.">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
  
<body class="bd-gray-700">

<!-- ---------------------- H  E  A  D  E  R ---------------------- -->
<header class="container-fluid p-0 position-relative">
  <!-- HEADER IMAGE ON STAGE -->
  <div class="row g-0">
    <img class="img-fluid mx-0 " src="IMG/PhotoHead.JPG" alt="les Z'improbagnais photo Jean-Marc Boutaud" srcset=""> 
  </div>
  
  <!-- LOGO & TITLE -->
  <div class="row myVertical position-absolute g-3 align-items-center">
    <!-- LOGO  -->
    <div class="col-3">
      <div
      class="img rounded-circle myLogo m-auto p-0">
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
<nav class="navbar navbar-expand-sm navbar-dark  sticky-top">
  <div class="container-fluid">
    
    <!-- B U T T O N  on MOBILE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <!-- M E N U -->
    <nav class="py-0 mx-3 my-0 ms-auto">
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="navbar-nav mb-2 mb-lg-0 bg-dark">
          <!-- ITEM 1 -->
          <li class="nav-item">
            <a class="nav-link p-2" id="Accueil" href="index.php">
              Accueil
            </a>
          </li>
          <!-- ITEM 2 -->
          <li class="nav-item">
            <a class="nav-link p-2 myActive" id="Spectacle" href="spectacles.php">
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

  <!-- PRESENT SPECTACLE PAGE -->
  <article class="container-md myWidth my-0">
    <h1>Nos spectacles :</h1>
    <div class="bg-gradient px-3 pt-2 rounded-1 my-4">
      Vous trouverez ici les informations relatives à nos spectacles et aussi quelques photos souvenirs pour se replonger dans l'ambiance de ces moments magiques partagés avec vous, cher public.
    </div>
  </article>

  <!-- PROCHAINES AFFICHES -->
  <?= imagesPosters(); ?>

  <!-- LES PHOTOS SOUVENIR----------------------------- -->
  <div class="container-md myWidth my-0">
    <h2 class ="h1">Des photos souvenir :</h2>
  </div>

  <!-- AFFICHE OF 16 DEC 2022 -->
  <article class="container-fluid my-5 w-100 text-center g-0">
    <h2 class="myYellow w-75 mx-auto">16 Décembre 2022</h2>
    <h3 class="w-75 mx-auto">Aubagne - Cercle de l'Harmonie</h3>
    
    <div class="container-md my-4 myWidthSmall g-0">
      <img src="IMG/Affiche-2022-12-16.jpg" alt="notre affiche" class ="w-100" srcset="">
    </div>
  </article>

 
  <!-- PICTURES GALERY 16 DEC 2022 -->
  <article class="container-xxl mb-5 p-sm-3 g-0">
    <div class="row row-cols-xl-4 justify-content-center w-100 g-0 p-0">      
      
    <!-- GALERY FROM PHP -->
    <?= imagesGalery('2022-12-16') ?>
              
    </div>
  </article>
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
  
  
</main>
  
  <!-- ........................ THIS IS THE END :o) ............................... -->
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>