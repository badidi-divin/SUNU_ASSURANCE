<?php
	//Récuperation du paramètre URL appelé code

	$id=$_GET['id'];

	require_once('../../../../model/bdd/connexion.php');

	$ps=$pdo->prepare("DELETE FROM paiement WHERE id=?");

	$params=array($id);

	$ps->execute($params);
	
	header("location:".$_SERVER['HTTP_REFERER']);