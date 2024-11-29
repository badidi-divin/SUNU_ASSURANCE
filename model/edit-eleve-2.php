<?php
	
	require_once('securico.php');
	$id=$_GET['id'];
	$requser=$pdo->prepare("SELECT * FROM assurance WHERE id=?");
	$requser->execute(array($id));
	$userinfo=$requser->fetch();

	if (isset($_POST['divin'])) {
		$nom=htmlspecialchars($_POST['nom']);
		$postnom=htmlspecialchars($_POST['postnom']);
		$prenom=htmlspecialchars($_POST['prenom']);
		$sexe=htmlspecialchars($_POST['sexe']);
		$email=htmlspecialchars($_POST['email']);
		$numero=htmlspecialchars($_POST['numero']);
		$adresse=htmlspecialchars($_POST['adresse']);
		$demande=htmlspecialchars($_POST['demande']);
		$errors=array();
		$file_name=$_FILES['fichier']['name'];

		if ($file_name=="") {
		//Création de l'objet prepare et envoie de la requête
		$ps=$pdo->prepare("UPDATE assurance SET nom=?,postnom=?,prenom=?,sexe=?,email=?,numero=?,adresse=?,demande=?,etat=1 WHERE id=?");
		//Pour bien recupere les données on crée un table de parametre
		$params=array($nom,$postnom,$prenom,$sexe,$email,$numero,$adresse,$demande,$_GET['id']);
		//Execution de la requête par leur paramètre en ordre 
		$ps->execute($params);
		?>
			<script type="text/javascript">
				alert('Vos données ont été bien Modifiées!')
			</script>
			<script>
				window.open('./profile.php','_self')
			</script>
			<?php

			exit();	
	
		}else{

		$file_extension=strrchr($file_name, ".");
		$file_tmp_name=$_FILES['fichier']['tmp_name'];
		$file_dest='../pdf/'.$file_name;
		$extensions_autorisees=array('.pdf', '.PDF');
				if (in_array($file_extension, $extensions_autorisees)) {
						if(move_uploaded_file($file_tmp_name, $file_dest)){
			if (empty($errors)) {
		//Création de l'objet prepare et envoie de la requête
		$ps=$pdo->prepare("UPDATE assurance SET nom=?,postnom=?,prenom=?,sexe=?,email=?,numero=?,adresse=?,demande=?,fichier=?,chemin=?,etat=1 WHERE id=?");
		//Pour bien recupere les données on crée un table de parametre
		$params=array($nom,$postnom,$prenom,$sexe,$email,$numero,$adresse,$demande,$file_name,$file_dest,$_GET['id']);
		//Execution de la requête par leur paramètre en ordre 
		$ps->execute($params);
		?>
			<script type="text/javascript">
				alert('Vos données ont été bien Modifiées!')
			</script>
			<script>
				window.open('./profile.php','_self')
			</script>
			<?php

			exit();	
			}

		}else{
				$errors['erreur']="Une erreur est survenue lors de l'envoie du fichier";
			}
		}else{
			$errors['erreur']= "Seuls les fichiers PDF sont autorisés";
		}
	}
	
		}

	