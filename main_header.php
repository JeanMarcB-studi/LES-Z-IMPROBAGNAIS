<!DOCTYPE html>
<html lang="fr">
  
<!-- ---------------------- T H E    H  E  A  D--------------------- -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="_bootstrap/bootstrap.css">
  
  <!-- myCSS -->
  <link rel="stylesheet" href="CSS/style.css">
  
  <title><?= $title ?></title>
  <meta name="description" content= "<?= $descr ?>">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
</head>
<!-- ---------------------- END  OF  H  E  A  D--------------------- -->

<body class="bd-gray-700">
  
  <!-- BIBLIOTHEQUE -->
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
            <a class="nav-link p-2" id="Accueil" href="#">
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
