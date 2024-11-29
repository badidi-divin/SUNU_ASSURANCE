<?php 
	$id=$_GET['id'];
	$requser=$pdo->prepare("SELECT * FROM candidat WHERE id_candidat=?");
	$requser->execute(array($_GET['id']));
	$userinfo=$requser->fetch();

	if (isset($_POST['envoie'])) {
		$ps=$pdo->prepare("UPDATE candidat SET montant=? WHERE id_candidat=?");
	//Pour bien recupere les données on crée un table de parametre
	$params=array($_POST['montant'],$id);
	//Execution de la requête par leur paramètre en ordre 
	$ps->execute($params);
	// Pour recuperer l'id du user
	?>
			<script type="text/javascript">
				alert('Vos données ont été bien Modifiée!')
			</script>
			<script>
				window.open('./eleve.php','_self')
			</script>
			<?php

			exit();	
			}