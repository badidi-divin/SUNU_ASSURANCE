<?php
	session_start();
	$id=1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title> 
	<link rel="stylesheet" type="text/css" href="../css/test2.css">
</head>
	<style type="text/css">
		/** Pour creer un decallage **/
			.spacer{
				padding-top: 80px;
			}
			.space{
				margin-top: 60px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
	<body>
		<!-- Navigation -->
	
	<!-- navigation end -->
	<?php 
	    require_once("../../model/bdd/connexion.php");
		require_once('../../model/selection_candidat-1.php');
	?>
	<div class="contenair col-lg-12 col-md-6">
			<div align="center">
				<img src="../../includes/111.PNG" width="100px" height="120px">
				<h2 style="font-weight: bold;"><u> LISTE DES ASSURES EN COURS DE VALIDATION DE SUNA ASSURANCES RDC</u></h2>
				
			</div>
			<div class="col-md-12 col-xs-12 ">
				<!--un div encadrer ayant pusierus categorie dont n a utiliser info  -->
				<div class="panel panel-info">
					<!-- titre dans bootstrap -->
					<div class="panel-heading">
						LISTE DES ASSURES DE SUNA ASSURANCES RDC
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<div class="table-responsive table--no-card m-b-30">
							<table class="table table-striped">
								<thead>
									<tr>
											<th>ID</th><th>NOM COMPLET</th><th>SEXE</th><th>EMAIL</th><th>TELEPHONE</th>
										<th>NUM-ASSURANCE</th>
										<th>DEMANDE</th><th>ADRESSE</th><th>DATES</th>
									</tr>
								</thead>
															<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo($id)?></td>
								<td><?php  echo($et['nom']." ".$et['postnom']." ".$et['prenom'])?></td>
								<td><?php  echo($et['sexe'])?></td>
								<td><?php  echo($et['email'])?></td>
								<td>+<?php  echo($et['numero'])?></td>
								<td><?php  
											if ($et['etat']==1) {
												echo($et['num_assurance']);
											}else{
												echo "Pas disponible";
											}
										?></td>
								<td><?php  echo($et['demande'])?></td>
								<td><?php  echo($et['adresse'])?></td>
								<td><?php  echo($et['dates'])?></td>
								<!--liens -->
								
											</tr>	
									<?php $id++;} ?>	
							</tbody>
							</table>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- Circulation de la page -->
	</body>
</html>
