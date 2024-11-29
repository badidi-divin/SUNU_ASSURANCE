<?php  

	$requete="SELECT * FROM sinistre WHERE etat=0";	
	
	$resultat=$pdo->query($requete);
