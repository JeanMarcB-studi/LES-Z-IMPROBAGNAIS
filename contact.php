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
  
  <title>les Zimprobagnais : pour nous contacter</title>
  <meta name="description" content="Une question ou proposition de spectacle : ici toutes les informations pour contacter les z'improbagnais troupe d'improvisation à Aubagne.">
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
            <a class="nav-link p-2" id="Accueil" href="index.php">
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
            <a class="nav-link p-2 myActive" id="Contact" href="#">
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

<!-- PRESENT CONTACT PAGE-->
<article class="container-md myWidth my-0">
  <h1 >Pour nous contacter :</h1>
  <div class="bg-gradient px-3 pt-2 rounded-2 my-4">
    Cher visiteur, <br> Vous avez une question, une idée, une remarque ou bien une proposition de spectacle ? <br> Si vous souhaitez nous contacter, ce formulaire et cette page sont à votre disposition !
  </div>
</article>

<!-- ----------------- FORMULAIRE DE CONTACT---------------- -->

<article class="container d-flex flex-column min-vh-75 justify-content-center align-items-center bd-gray-800 mx-auto my-5 border rounded-1 myWidth">
  
  <form class="row g-3 needs-validation" id="contactForm" novalidate>
    
    <div class="col-md-6">
      <label for="firstname" class="form-label">Prénom :</label>
      <input type="text" class="form-control" name="firstName" id="firstName" label="firstname" placeholder="votre Prénom ?">
      <div class="invalid-feedback">
        Veuillez saisir votre prénom.
      </div>
    </div>
    
    <div class="col-md-6">
      <label for="lastname" class="form-label">Nom :</label>
      <input type="text" class="form-control" name="lastName" id="lastName" label="name" placeholder="votre Nom ?">
      <div class="invalid-feedback">
        Veuillez saisir votre nom.
      </div>
    </div>

    <div class="col-md-6">
      <label for="email" class="form-label">E-mail :</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="votre Email ?">
      <div class="invalid-feedback">
        Veuillez saisir votre e-mail.
      </div>
    </div>
    
    <div class="col-md-6">
      <label for="phoneNumber" class="form-label">Téléphone :</label>
      <input type="email" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="votre No de téléphone ?">
      <div class="invalid-feedback">
        Veuillez saisir votre numéro de téléphone.
      </div>
    </div>
    
    <!-- Message input -->
    <div class="form-outline mb-1">
      <label for="message" class="form-label">Votre message :</label>
      <textarea class="form-control py-0 lh-1" id="message" name="message" rows="6" placeholder="votre message ici..."></textarea>
      <div class="invalid-feedback">
        Veuillez saisir un message.
      </div>
      
    </div>
    
    <button type="button" class="btn btn-bd-accent w-25 mb-3 ms-2" id="postMsg">Envoyer</button>
  </form>
</article>

</main>
<!-- --------------------  end  M A I N  CONTENT   ---------------  -->

<!-- -----------------------        FOOTER        ----------------  -->
<footer>
  <div class="text-center mb-4">
    <div type="button" class="btn btn-outline-light myBtonSocial">
      <a title="facebook" href="https://www.facebook.com/groups/1494311630673891">
        <i class="bi bi-facebook myFB"></i>
      </a>
    </div>
    
  <div type="button" class="btn btn-outline-light myBtonSocial">
    <a title="email" href="mailto:zimprobagnais@gmail.com">
      <i class="bi bi-envelope-at myMail"></i>
    </a>
  </div>
  
  <div type="button" class="btn btn-outline-light myBtonSocial">
    <a title="téléphone" href="tel:+33664711699">
      <i class="bi bi-telephone myTel"></i>
    </a>
  </div>
</div>

<!-- OUR POLICY -->
<div class="container-md my-3 text-center">
  <a href="politique.html" target="_blank">Politique de confidentialité</a>
</div>

</footer>
<!-- -----------------------    end FOOTER        ----------------  -->



<!-- ........................ THIS IS THE END :o) ................. -->

<!-- controls on form -->
<script src="JVS/form.js"></script>

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>