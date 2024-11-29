<?php
 		$mc="";
		  
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM paiement WHERE code_eleve LIKE '%$mc%'";
			}
			else
			{
				$req="SELECT * FROM paiement";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();
			