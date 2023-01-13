<?php 
session_start();

	include("connecxion.php");
	if(isset($_POST['connecter']) && $_POST['connecter']=="SE CONNECTER"){
		# code...

		if ((isset($_POST['utilisateur']) && !empty($_POST['utilisateur'])) && (isset($_POST['pass']) && !empty($_POST['pass']))) {
			# code...
			$_SESSION['utilisateur']=$_POST['utilisateur'];
			$_SESSION['pass']=$_POST['pass'];
			if (isset($_POST['check']) && !empty($_POST['check'])){
				# code...
				$sql1=$bdd->prepare("SELECT COUNT(*) FROM administrateur WHERE admi_name=? AND admi_pass=?");
				$sql1->execute(array(htmlspecialchars($_SESSION['utilisateur']), htmlspecialchars($_SESSION
				['pass'])));
				while ($donne=$sql1->fetch()) {
					# code...
					if ($donne['COUNT(*)'] !=0) {
						# code...
						header('location:Fichiers.php');
					}else{
						$erreur='<label style=" color: yellow; background: #000; font-family: arial; ">Erreur: utilisateur ou mot de passe incorrecte.</label>';
						echo "$erreur";
					}
				}
			}else{
				$sql1=$bdd->prepare("SELECT COUNT(*) FROM user WHERE user_name=? AND user_pass=?");
				$sql1->execute(array(htmlspecialchars($_SESSION['utilisateur']), htmlspecialchars($_SESSION
				['pass'])));
			}
				while ($donne=$sql1->fetch()) {
				# code...
					if ($donne['COUNT(*)'] !=0) {
						# code...
						header('location:Fichiers.php');
					}else{
					$erreur='<label style=" color: yellow; background: #000; font-family: arial; ">Erreur: utilisateur ou mot de passe incorrecte.</label>';
					echo "$erreur";
				}
			}

		}else{
				$erreur='<label style="color:red; background:#fff; font-family:arial;">Erreur: Veillez remplir tous les champs</label>';
				echo "$erreur";
			}
	}
	
	
	

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Athentification</title>
		<link rel="stylesheet" type="text/css" href="authentification.css">
	</head>
	<body>
	
	<h1 > BIENVENU DANS VOTRE PAGE WEB </h1>
	<h2 class="h2">Veillez-vous authentifier</h2>
	<form method="POST" action=" "  enctype="multipart/form-data">

		<label>Nom d'Utilisateur :</label>
		<input type="text" name="utilisateur" placeholder="username" class="input1" />
		<br/>
		<br/><label >Mot De Passe :</label>
		<input type="password" name="pass" placeholder="password" class="input2" />
		<br/>
		<br/><input type="checkbox" name="check" class="check" /><label>Aministrateur</label><br/>
		<br/><input type="submit" name="connecter" value="SE CONNECTER" class="connecter"/>
	</form>
	</body>
</html> 