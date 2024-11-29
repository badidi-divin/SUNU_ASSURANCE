<?php 
   require_once('../model/bdd/connexion.php');
   require_once('../model/inscription.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>SUNU ASSURANCES RDC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html"><span class="fa fa-user-circle"></span> SUNU ASSURANCES RDC</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
       <span class="oi oi-menu"></span> Menu
   </button>
   <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a href="index.php" style="font-size: 18px;" class="nav-link"><p>Accueil</p></a></li>
         <li class="nav-item"><a href="contact.php" style="font-size: 18px;" class="nav-link"><p>Signaler un sinistre</p></a></li>
      </ul>
   </div>
  </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('../includes/car1.jpg');">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
      
</div>
</div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
   <div class="container">
      <div class="row">
         <div class="col-md-7"></div>
         <div class="col-md-5 order-md-last">
          <div class="login-wrap p-4 p-md-5">
              <h3 class="mb-4">Souscrire à l'assurance Auto-Mobile</h3>
              <?php
                  if (!empty($errors)):
               ?>
               <div class="alert alert-danger">
                  <p></p>
                     <ul>
                        <?php foreach($errors as $error):?>
                           <li><?= $error; ?></li>
                        <?php endforeach; ?>
                     </ul>
                  </div>
                  <?php endif; ?>
              <form action="" method="post" class="signup-form">
                 <div class="form-group">
                     <label class="control-label">Nom:</label>
                     <input type="text" class="form-control" placeholder="Votre Nom" name="nom" value="<?php if(isset($nom)){ echo $nom; } ?>">
                  </div>
                <div class="form-group">
                  <label class="control-label">Post-Nom:</label>
                  <input type="text" class="form-control" placeholder="Votre Post-Nom" name="postnom" value="<?php if(isset($postnom)){ echo $postnom; } ?>">
               </div>
                <div class="form-group">
                  <label class="control-label">Prenom:</label>
                  <input type="text" class="form-control" placeholder="Votre Prénom" name="prenom" value="<?php if(isset($prenom)){ echo $prenom; } ?>" >
               </div>
             <div class="form-group">
               <label class="control-label">Sexe:</label>
               <select name="sexe" class="form-control" autocomplete="off" required="required">
                  <option value="Masculin">
                     Masculin
                  </option>
                  <option value="Féminin">
                     Féminin
                  </option>
                  </select>
            </div>
            <div class="form-group">
               <label class="control-label">E-mail:</label>
               <input type="email" class="form-control" placeholder="Adresse E-mail" name="email" value="<?php if(isset($email)){ echo $email; } ?>">
            </div>
            <div class="form-group">
               <label class="control-label">Télephone:</label>
               <input type="number" class="form-control" placeholder="Numéro Télephone" name="numero" value="<?php if(isset($numero)){ echo $numero; } ?>">
            </div>
            <div class="form-group">
               <label class="control-label">Adresse Complète:</label>
               <input type="text" class="form-control" placeholder="adresse complète" name="adresse" value="<?php if(isset($adresse)){ echo $adresse; } ?>">
            </div>
            <div class="form-group">
               <label class="control-label">Explicitez votre demande:</label>
               <textarea type="text" class="form-control" name="demande"></textarea>
            </div>
             <div class="form-group d-flex justify-content-end mt-4" align="center">
                 <button type="submit" class="btn btn-primary submit" name="divin" title="S'inscrire"><span class="fa fa-paper-plane">Souscrire</span></button>
             </div>
         </form>
        
     </div>
 </div>
</div>
</div>
</section>




<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>