<?php  

	$requete="SELECT * FROM assurance WHERE etat=0";	
	
	$resultat=$pdo->query($requete);
