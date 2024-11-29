<?php 
//système de gestion de compte utilisateur
	session_start();
	if (isset($_POST['envoie'])) {
		$username=htmlspecialchars($_POST['username']);
		$password=md5($_POST['password']);
		if (!empty($username) && !empty($password)) {
			// Vérification si l'utilisateur existe vraiment
			$requiser=$pdo->prepare("SELECT * FROM agent WHERE nom_utilisateur=? AND mot_de_passe=?");
			$requiser->execute(array($username,$password));
			// rowCount permet de compter le nombre saisie par le user
			$userexist=$requiser->rowCount();
			if ($userexist==1) {
				$userinfo=$requiser->fetch();
				$_SESSION['id_agent']=$userinfo['id_agent'];
				$_SESSION['nom_utilisateur']=$userinfo['nom_utilisateur'];
				$_SESSION['role']=$userinfo['role'];
				header("Location: profile.php");		
			}
			else
			{
				$erreur="Mauvais Pseudo ou mauvais mot de passe! ";
			}
		}else{
			$erreur="Tous les champs doivent être complétés!";
		}
	}
