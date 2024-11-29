<?php
	session_start();
	require_once('../../../../model/bdd/connexion.php');
	$requete="SELECT * FROM candidat WHERE etat=1";
	$resultat=$pdo->query($requete);
	$nblmd=$pdo->prepare('SELECT SUM(montant) AS prix_total FROM candidat');
     $nblmd->execute();
     $nblmd=$nblmd->fetch()['prix_total'];
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Impression</title>
	<link rel="stylesheet" href="test.css">
	<style type="text/css">
		@page
		{
			size:A4;
			margin:0; 

		}
		#print-btn{
			display: none;
			visibility: none;
		}
		.margetop{
			margin-top: 82px;
		}
		.spacer{
			margin-top: 10px;
		}
		.space{
			margin-top: 70px;
		}
		.spac{
			margin-top: 80px;
		}
		.a{
			text-align:center;
			text-decoration: blink;
		}
	</style>
</head>
<body>
	<!--************************ Header ***********************************-->
	<!-- Navigation -->

			<div class="container headings text-center margetop" >
				<h3 class=" pt-1" style="font-weight: bold;">ECOLE KIMBWALA</h3>
			</div>
		<div class="container col-12" style="margin-top:20px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
						LISTE DES SITUATIONS DE PAIE DES ELEVES
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="table-plus">CODE</th>
									<th>NOM COMPLET</th>
									<th>SEXE</th>
									<th>CLASSE</th>
									<th>NUMERO</th>
									<th>ADRESSE</th>
									<th>MONTANT A PAYER</th>
									<th>ANNEE SCOLAIRE</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo($et['id_candidat'])?></td>
									<td><?php  echo($et['nom'])." ".($et['postnom'])." ".($et['prenom'])?></td>
									<td><?php  echo($et['sexe'])?></td>
									<td><?php  echo($et['classe'])?></td>
									<td><?php  echo($et['numero'])?></td>
									<td><?php  echo($et['adresse'])?></td>
									<td><?php  echo($et['montant']."$")?></td>
									<td><?php  echo($et['annee_scolaire'])?></td>
								<!--liens -->
								<td>
											</tr>	
									<?php } ?>	
							</tbody>
							<tfoot style="background: black; color:white;font-size: 17px !important;text-align: center !important;">
                                            <tr>
                                                <th colspan="4" style="text-align: center;">Total Montant A Payer(<?php echo $nblmd."$";?>)</th>
                                            </tr>
                                        </tfoot>
						</table>	
					</div>
				</div>	
			</div>
	<!-- Circulation de la page -->
	
	
	<!-- Affichage inscris end -->
		
	




<!-- ***********footer Ends******************** -->
<!-- **********************Code Javascript*********************-->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
