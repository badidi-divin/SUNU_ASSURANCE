<?php 
	$id=$_GET['id'];
	$requser=$pdo->prepare("SELECT * FROM paiement WHERE id=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();

	if (isset($_POST['envoie'])) {
	$montant2=$_POST['montant_payer'];
	
	$ps=$pdo->prepare("UPDATE paiement SET montant_payer=? WHERE id=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($montant2,$solde,$_POST['annee_scolaire'],$id);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);

	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien Modifiées!')
			</script>
			<script>
				window.open('./paiement.php','_self')
			</script>
			<?php

			exit();	
			}