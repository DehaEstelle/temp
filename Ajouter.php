<?php

	include("connecxion.php");
		# code...
	if ((isset($_POST['utilisateur'])) && (isset($_POST['pass'])) && isset($_POST['prof'])) {

		if (!empty($_POST['utilisateur']) && !empty($_POST['pass']) && !empty($_POST['prof'])) {
			# code...
			$sql=$bdd->prepare(" INSERT INTO user (user_name, user_pass, profession) VALUES (?,?,?)");
			$sql->execute(array($_POST['utilisateur'], $_POST['pass'], $_POST['prof']));
			$succes='<label style="color:green; ">FELICITATION: Ajout fait.</label>';
			echo "$succes";

		}else{
		$erreur='<label style="color:red; ">Erreur: Veillez remplir tous les champs.</label>';
		echo "$erreur";
	}
		
		
		

	}	
		
	
    
		
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Ajout des employés</title>
		<link rel="stylesheet" type="text/css" href="ajouter.css">
	</head>
	<body>
		
		<h1>Ajouter vos employés ici</h1>
		<p>
			IL suffit de renseigner tous les champs et de cliquer sur "Ajouter".<br/>
			Ceci vous ajoutera un nouveau employé.
		</p>
		<form method="POST" action=" " enctype="multipart/form-data">
		<label>Nom d'Utilisateur :</label>
		<input type="text" name="utilisateur" placeholder="username"/>
		<br/>
		<br/><label>Mot De Passe :</label>
		<input type="password" name="pass" placeholder="password"/>
		<br/>
		<br/><label>Profession :</label><input type="text" name="prof" placeholder="EX:Sécurité">
		<br/>
		<br/><input type="submit" name="ajouter" value="AJOUTER" class="ajouter"/>
		<br/>
		<br/>
		</form>
		<a href="index.php" class="retour">Retour</a>
	
	</body>
</html
