<?php 
	session_start();
	$requser=$pdo->prepare("SELECT * FROM agent WHERE id_agent=?");
	$requser->execute(array($_SESSION['id_agent']));
	$userinfo=$requser->fetch();

    if (isset($_POST['username']) AND !empty($_POST['username']) AND $_POST['username'] !=$userinfo['username']) {
        $pseudo=htmlspecialchars($_POST['username']);
        $insertpseudo=$pdo->prepare('UPDATE agent SET nom_utilisateur=? WHERE id_agent=?');
        $insertpseudo->execute(array($pseudo,$_SESSION['id_agent']));
        header("Location: profile.php");
    }

    if (isset($_POST['password']) AND !empty($_POST['password']) AND $_POST['password'] !=$userinfo['mot_de_passe']) {
        $password=md5($_POST['password']);
        $insertpassword=$pdo->prepare('UPDATE agent SET mot_de_passe=? WHERE id_agent=?');
        $insertpassword->execute(array($password,$_SESSION['id']));
        header("Location: profile.php");
    }