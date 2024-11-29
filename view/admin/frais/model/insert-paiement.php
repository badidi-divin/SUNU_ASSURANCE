<?php 
	if (isset($_POST['envoie'])) {
	$code=$_POST['code_eleve'];
	// Recherche dans le database
	$requser=$pdo->prepare("SELECT * FROM candidat WHERE matricule=?");
	$requser->execute(array($code));
	$userinfo=$requser->fetch();

	$montant1=$userinfo['montant'];
	$montant2=$_POST['montant_payer'];
	if ($montant1<$montant2) {
		?>
			<script type="text/javascript">
				alert('Le Montant à Payer doit être toujours supérieur ou égal au Montant payer')
			</script>
			<script>
				window.open('./add-paiement.php','_self')
			</script>
			<?php

			exit();	
			
	}else if($montant1==0){
		?>
			<script type="text/javascript">
				alert('L\'élève est déjà en ordre avec le frais scolaire')
			</script>
			<script>
				window.open('./add-paiement.php','_self')
			</script>
			<?php

			exit();	

	}else{
		$reste=$montant1-$montant2;
		$ps=$pdo->prepare("UPDATE candidat SET montant=? WHERE matricule=?");
		//Pour bien recupere les données on crée un table de parametre
		$params=array($reste,$code);
		//Execution de la requête par leur paramètre en ordre 
		$ps->execute($params);	
	}
		$ps=$pdo->prepare("INSERT INTO paiement(code_eleve,montant_a_payer,montant_payer,annee)VALUES(?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($code,$montant1,$montant2,$userinfo['annee_scolaire']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);

	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien enregistré!')
			</script>
			<script>
				window.open('paiement.php','_self')
			</script>
			<?php

			exit();	
			}