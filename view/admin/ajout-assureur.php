<?php
	session_start();
	require_once('../../model/bdd/connexion.php');
	require_once('securico.php');
	require_once('../../model/insert-eleve.php');
	$id=1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title> 
	<link rel="stylesheet" type="text/css" href="../css/test2.css">
</head>
	<style type="text/css">
		/** Pour creer un decallage **/
			.spacer{
				padding-top: 80px;
			}
			.space{
				margin-top: 60px;
			}
			.spac{
				margin-top: 80px;
			}
			.a{
				text-align:center;
				text-decoration: blink;
			}
	</style>
	<body>
		<!-- Navigation -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!--cette class utilisé c pour avoir une barre de navigation horizontal -->
			<ul class="nav navbar-nav">
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="profile.php">Tableau de bord</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="font-size: 23px" href="logout.php">Se deconnecter</a>
				</li>
			</ul>
		</div>
	<!-- navigation end -->
	 <div class="contenair bad col-md-6 col-xd-12 col-md-offset-3" style="margin-top:68px;">
	<!-- panel default ce n'est que la couleur qui va changer -->
	<div class="panel panel-default">
		<div class="panel-heading">
			<h2 align="center">AJOUTER</h2>
		</div>
		<div class="panel-body">
			<form method="post" action="" enctype="multipart/form-data">
				<?php
						if (!empty($errors)):
					?>
					<div class="alert alert-danger">
						<p></p>
							<ul>
								<?php foreach($errors as $error):?>
									<li><?= $error; ?></li>
								<?php endforeach; ?>
							</ul>
						</div>
						<?php endif; ?>
				<div class="form-group">
					<label class="control-label">Nom:</label>
				    <input type="text" class="form-control" placeholder="Nom" name="nom">
				</div>
				<div class="form-group">
					<label class="control-label">Post-Nom:</label>
				     <input type="text" class="form-control" placeholder="Votre Post-Nom" name="postnom">
				 </div>
				 <div class="form-group">
					<label class="control-label">Prenom:</label>
				    <input type="text" class="form-control" placeholder="Votre Prénom" name="prenom" >
				</div>
				<div class="form-group">
					<label class="control-label">Sexe:</label>
				    <select name="sexe" class="form-control" autocomplete="off" required="required">
                    <option value="Masculin">
                    	Masculin
                    </option>
                    <option value="Féminin">
                     	Féminin
                    </option>
                  </select>
				</div>
				<div class="form-group">
					<label class="control-label">E-mail:</label>
				    <input type="email" class="form-control" placeholder="Adresse E-mail" name="email">
				 </div>
				<div class="form-group">
				    <label class="control-label">Télephone:</label>
				    <input type="number" class="form-control" placeholder="Numéro Télephone" name="numero">
			    </div>
				<div class="form-group">
					<label class="control-label">Adresse Complète:</label>
				    <textarea  id="" cols="30" rows="7" class="form-control" placeholder="Adrese Complète..." name="adresse"></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Demande:</label>
				    <textarea cols="30" rows="7" class="form-control" placeholder="demande..." name="demande"></textarea>
				</div>
				<div class="form-group">
				    <label class="control-label">Fichier de l'assurance:</label>
				    <input type="file" class="form-control" placeholder="Fichier" name="fichier">
			    </div>
				<div class="form-group" align="center">
					<button type="submit" class="btn btn-danger" name="divin">Ajouter</button>
				</div>
			</form>
           		
		</div>
	</div>
	<!-- Circulation de la page -->
	</body>
</html>
