<?php
	require_once('../model/contact.php');
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
    <link rel="stylesheet" href="../Auto-completion/style.css">
    <link rel="stylesheet" href="../Auto-completion/jquery-ui.css">
    <link rel="stylesheet" href="../Auto-completion/jquery-ui.min.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
   <div class="container">
     <a class="navbar-brand" href="index.html"><span class="fa fa-user-circle"></span> SUNU ASSURANCE</a>
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
	<section class="hero-wrap hero-wrap-2" style="background-image: url('../includes/car2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate pb-5 text-center">
					<h1 class="mb-0 bread">Signaler un sinistre?</h1>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Accident ou n'importe qu'elle sinistre par rapport à votre vehicule?<br>
									Laissez un message ou une Suggestion ici</h3>
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
									<form method="POST" id="contactForm" action="contact.php" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Votre Numéro d'assurance</label>
													<input type="text" id="cli_name" class="form-control" name="num_assurance"  placeholder="Ex:Numéro d'assurance">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Message</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Explicitez le problème"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" name="save" value="Envoyez Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									
									
									
									
									
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ****************Footer******************************* -->
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

<script src="../Auto-completion/jquery.min.js"></script>
<script src="../Auto-completion/jquery-3.2.1.min.js"></script>
<script src="../Auto-completion/jquery-ui.min.js"></script>
<script src="../Auto-completion/script.js"></script>

</body>
</html>