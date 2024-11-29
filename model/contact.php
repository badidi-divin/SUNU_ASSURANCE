<?php
	require_once('../model/bdd/connexion.php');
	if (isset($_POST['save'])) {
		$num_assurance=htmlspecialchars($_POST['num_assurance']);
		$message=htmlspecialchars($_POST['message']);

		$errors=array();

		if (empty($_POST['num_assurance'])) {
			$errors['num_assurance']="Votre numéro assurance n'est pas valide(Pas d'espace, ni d'accent)";
		}

			if (empty($errors)) {			
					 //Création de l'objet prepare et envoie de la requête
				    $ps=$pdo->prepare("INSERT INTO sinistre(num_assurance,message)VALUES(?,?)");
				    //Pour bien recupere les données on crée un table de parametre
				    $params=array($num_assurance,$message);
				    //Execution de la requête par leur paramètre en ordre 
				    $ps->execute($params);
					// Pour recuperer l'id du user
					echo "<script>alert('Message envoyé avec Succès Nous allons vous contactez au plus vite merci par mail ou par votre Numéro whatsapp!')</script>";
					echo "<script>window.open('contact.php', '_self')</script>";
					exit();	
				}
	}