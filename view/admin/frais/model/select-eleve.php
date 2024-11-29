<?php 	
$mc="";
			if(isset($_GET['motcle'])){
				$mc=$_GET['motcle'];
				$req="SELECT * FROM candidat WHERE matricule LIKE '%$mc%' AND etat=1";
			}
			else
			{
				$req="SELECT * FROM candidat WHERE etat=1";
			}
			$ps=$pdo->prepare($req);
			$ps->execute();