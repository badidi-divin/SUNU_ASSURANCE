<?php 
	if (isset($_POST['envoie'])) {
		$ps=$pdo->prepare("INSERT INTO candidat(code_eleve,nom,postnom,prenom,sexe,classe,option,tel,adresse,montant,annee_scol)VALUES(?,?,?,?,?,?,?,?,?,?,?)");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($_POST['code_eleve'],$_POST['nom'],$_POST['postnom'],$_POST['prenom'],$_POST['sexe'],$_POST['classe'],$_POST['option'],$_POST['tel'],$_POST['adresse'],$_POST['montant'],$_POST['annee_scolaire']);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien enregistré!')
			</script>
			<script>
				window.open('./eleve.php','_self')
			</script>
			<?php

			exit();	
			}