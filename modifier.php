<?php
	include('connecxion.php');
	if (isset($_POST['id']) && isset($_POST['text']) && isset($_POST['password'])) {
		# code.
		if (!empty($_POST['id']) && !empty($_POST['text']) && !empty($_POST['password'])) {
			# code...
			$sql=$bdd->prepare("UPDATE user SET user_name = :name, user_pass = :pass, profession= :pro WHERE id='$_POST[id]'");
			$sql->execute(array(
			'name'=>$_POST['text'],
			'pass'=>$_POST['password'],
			'pro'=>$_POST['profession']
			));
			echo "modification faite";
		}else{
			$erreur='<label style="color:red; ">Erreur: Veillez remplir tous les champs.</label>';
			echo "$erreur";

			}
	}
			
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>MODIFICATION</title>
		<link rel="stylesheet" type="text/css" href="modifier.css">
	</head>
	<body>
		<h1> BIENVENU DANS LA  PAGE DE MODIFICATION</h1>
		<p>
				Cette page consiste à effectuer des modifications rélatives à vos employés.<br/>	

				<form method="POST" action="">
					
					<label>Etrer l'identifiant :</label>
					<input type="number" name="id" placeholder="id_cible" style="margin-left: 32px;"/><br/>
					<br/>
					<label>Entrez le nom d'utilisateur</label>
					<input type="text" name=" text"/><br/>
					<br/>
					<label>Entrez un mot de passe </label>
					<input type="password" name="password" style="margin-left: 20px" /><br/>
					<br/>
					<label>Profession : </label>
					<input type="text" name="profession" style="margin-left: 90px"/><br/>
					<br/>

					

					<input type="submit" name="modifier" value="Modifier" style="margin-left:212px; color: green"/><br/>
					<br/>
					
					
				</form>
				<a href="index.php" class="retour">Retour au menu principal</a>
				
		</p>
	</body>

</html>