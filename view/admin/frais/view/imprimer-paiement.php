<?php
	session_start();
	require_once('../../../../model/bdd/connexion.php');
	$requete="SELECT * FROM paiement";
	$resultat=$pdo->query($requete);

	$nblmd=$pdo->prepare('SELECT SUM(montant_payer) AS prix_total FROM paiement');
     $nblmd->execute();
     $nblmd=$nblmd->fetch()['prix_total'];

	$c=1;
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
						HISTORIQUE DE PAIEMENTS DES FRAIS SCOLAIRES 
					</div>	
					<!-- Le corps du tableau où l'on mettra le contenu -->
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th class="table-plus">ID</th>
									<th>CODE ELEVE</th>
									<th>MONTANT A PAYER</th>
									<th>MONTANT PAYER</th>
									<th>DATE PAIEMENT</th>
									<th class="datatable-nosort"></th>
								</tr>
							</thead>
							<tbody>
								<?php while ($et=$resultat->fetch()){?>
								<tr>
								<td><?php  echo $c;?></td>
									<td><?php  echo($et['code_eleve'])?></td>
									<td><?php  echo($et['montant_a_payer'])?></td>
									<td><?php  echo($et['montant_payer'])?></td>
									<td><?php  echo($et['dates'])?></td>
								<!--liens -->
								<td>
											</tr>	
									<?php 
									$c++;
								} ?>	
							</tbody>
							<tfoot style="background: black; color:white;font-size: 17px !important;text-align: center !important;">
                                            <tr>
                                                <th colspan="4" style="text-align: center;">Total Montant Payer(<?php echo $nblmd."$";?>)</th>
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
