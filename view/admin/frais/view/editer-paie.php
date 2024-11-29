<?php require_once('../../../../model/bdd/connexion.php');
	  require_once('../model/update-paiement.php');
 ?>
<!DOCTYPE html>
<html>
	<head>
		<?php require_once('head.php'); ?>
		<!-- End Google Tag Manager -->
	</head>
	<body class="login-page">
		<div class="login-header box-shadow">
			<div
				class="container-fluid d-flex justify-content-between align-items-center"
			>
				<div class="brand-logo">
					<a href="login.html">
						
						
					</a>
				</div>
			</div>
		</div>
		<div
			class="login-wrap d-flex align-items-center flex-wrap justify-content-center"
		>
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-6 col-lg-7">
						<img src="vendors/images/login-page-img.png" alt="" />
					</div>
					<div class="col-md-6 col-lg-5">
						<div class="login-box bg-white box-shadow border-radius-10">
							<div class="login-title">
								<h2 class="text-center text-primary">Editer Paiement</h2>
							</div>
							<form method="post" action="">
								<div class="form-group">
									<label class="control-label">Montant Payer($)</label>
									<input
										type="number"
										class="form-control form-control-lg"
										placeholder="Montant_payer" name="montant_payer" value="<?= $userinfo['montant_payer'] ?>"
									/>
								</div>
								
								<div class="row">
									<div class="col-sm-12">
										<div class="input-group mb-0">
											<!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
											<button
												class="btn btn-primary btn-lg btn-block"
												type="submit" name="envoie"
												>Editer</button
											>
										</div>
									</div>
								</div>
							</form>
							<?php if(isset($erreur))
								echo "<font color='red'>".$erreur."</font>";
							 ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- welcome modal start -->
		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
