<?php  
	$nblmd=$pdo->prepare('SELECT SUM(montant) AS prix_total FROM candidat');
     $nblmd->execute();
     $nblmd=$nblmd->fetch()['prix_total'];