
<?php 
  $current = "Spectacles";
  $title = "les Zimprobagnais : nos spectacles de théâtre sur Aubagne";
  $descr = "Troupe d'amateurs de théâtre d'improvisation : pour tout savoir sur nos prochains spectacles autour d'Aubagne, cette page est faite pour vous.";

  require_once 'PHP/main_header.php';
  require_once "PHP/biblio.php"; 
?>  


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
  
  
<?php require_once "PHP/main_footer.php"; ?>