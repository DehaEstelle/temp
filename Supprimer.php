<?php
session_start();
	include("connecxion.php");
		# code...
	if (isset($_POST['id']) ) {
			# code...
		if (!empty($_POST['id'])) {
			# code...

			$sql=$bdd->query(" DELETE FROM user WHERE id='$_POST[id]' ") or die("probleme avec la requete:$sql");
		
			$erreur='<label style="color:green; ">FELICITATION: Suppression faite.</label>';
			echo "$erreur";
		}else{
			$erreur='<label style="color:red; ">Erreur: Veillez choisir un identifiant.</label>';
			echo "$erreur";
		}
		
		

	}	
		
	

		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ajout des employés</title>
		<link rel="stylesheet" type="text/css" href="Supprimer.css">
	</head>
	<body>
		<h1>Supprimer vos employes ici</h1>
		<p>
				Cette page consiste à supprimer les employés qui ne sont plus en fonction.<br/>	Il suffit juste d'ajouter l'idantifiant de la cible et de cliquer sur "supprimer".
		<form method="POST" action="" enctype="multipart/form-data">
		<br/>
		<label>Etrer l'identifiant :</label>
		<input type="number" name="id" placeholder="id_employe"/>
		<br/>
		<br/><input type="submit" name="Supprimer" value="Supprimer" class="supprimer" />
		<br/>
		<br/>
	    </form>
		<a href="index.php" class="retour">Retour</a>
		</p>
	</body>
</html>