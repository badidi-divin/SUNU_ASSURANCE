<?php
	require_once '../model/bdd/connexion.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SUNU ASSURANCE</title>
	<link rel="stylesheet" href="./css/test2.css">
	<style type="text/css">

	</style>
</head>
<body>
		<div class="container margetop">
			<div align="center">
			<img src="../includes/111.png" width="110px" height="150px">
			<h2 style="font-weight:bold;">SUNU ASSURANCES RDC</h2>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">	
					<h4 style="font-weight:bold;font-size: 30px;">Demande en cours de traitement...</h4>
				</div>				
					<div class="panel-body" style="background-color:#cfe8f8;">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Merci de nous avoir fait confiance voici <a href="./pdf/condition.pdf" target="_blank">les documents que vous devez apporter ... </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<h4> <span style="font-weight: bold;"> Mrs(Mdm):<?php echo $_SESSION['nom_complet'] ?></span> votre demande:"<?php echo $_SESSION['demande'] ?>" du <?php echo $_SESSION['dates'] ?> a été envoyé avec succès.</h4>
					<h4>Capturer cette page et passer dans notre agence le plus proche pour confirmer votre demande.</h4>
										</td>
									</tr>	
								</tbody>
							</table>
						</div>

					<h4 align="center"><a onclick="window.print()" >Print >>></a></h4>
				</div>
				<a href="./index.php">Retour à la page d'accueil</a>
			</div>
		</div>
	?>
<!-- **********************Code Javascript*********************-->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
