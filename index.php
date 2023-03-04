<?php 
$title = "les Z'improbagnais : théâtre improvisation à Aubagne";
$descr = "Nous sommes une troupe d'amateurs de théâtre d'Improvisation basée sur Aubagne. Notre ambition : partager nos meilleurs délires avec vous.";
$current = "Accueil";
require 'main_header.php';
 ?>

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
  
  <!-- AFFICHE 16 DEC 2022 -->
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

<?php echo '<script>', "let currentPage = '$current'",'</script>'; ?>
<!-- <script src="JVS/script.js"></script> -->

<!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  
</body>
</html>