<?php 
  $current = "Contact";
  $title = "les Zimprobagnais : pour nous contacter";
  $descr = "Une question ou proposition de spectacle : ici toutes les informations pour contacter les z'improbagnais troupe d'improvisation à Aubagne.";

  require_once 'PHP/main_header.php';
  require_once "PHP/biblio.php"; 
?>  


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
  
<?php require_once "PHP/main_footer.php"; ?>