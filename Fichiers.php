<?php
session_start();
	include('connecxion.php');
	setcookie('nom', $_SESSION['utilisateur'], time()+(30*24*3600));
	if (isset($_COOKIE['nom'])) {
		# code...
			echo "le cookie existe " .$_COOKIE['nom'];
		}else{
			echo "le cookie n'existe pas";
	 }


	if (isset($_FILES) && !empty($_FILES)) {
		# code...

		$file_name=$_FILES['file']['name'];
		$file_extension=strrchr($file_name, '.');
		$file_tmp_name=$_FILES['file']['tmp_name'];
		$file_dest= 'fichier/'.$file_name;
		$extension_autorise=array('.pdf', '.PDF', '.docx','.xlsx', '.pptx', '.pnj','.jpg', '.png');
		$erreur=$_FILES['file']['error'];
		$date=date('Y')."-".date('m')."-".date('d');
		if (in_array($file_extension, $extension_autorise)) {
			# code...
			if (move_uploaded_file($file_tmp_name, $file_dest)) {
				# code...

				$sql = $bdd->prepare(' INSERT INTO fichiers(nom, emplacement, employe, jour) VALUES (:nom, :emplacement, :employe, :jour) ');
				$sql->execute(array(
					':nom' => $file_name,
					':emplacement' => $file_dest,
					':employe' =>$_SESSION['utilisateur'],
					':jour' => $date ));

				$succes='<label style=" color: green;  font-family: arial;">Fichier est envoyé avec succès.</label>';
				if ($sql) {
					# code...
					echo "$succes";
				}else{
					echo "problème avec la requete";
				}
				
				
				
				
			}
			else{
				$erreur='<label style=" color: yellow;  font-family: arial; ">Une erreur s\'est produite lors de l\'envoie de fichier.</label>';
				echo "$erreur" ;
			}
		
		}else{
			$erreur='<label style=" color: red;  font-family: arial; ">Le fichiers que vous  n\'est pas autorisé.</label>';
				echo "$erreur";
			 
		}
		
	}	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Envoi de fichiers</title>
		<link rel="stylesheet" type="text/css" href="Fichiers.css">
	</head>
	<body>
	<form method="POST" action=" " enctype="multipart/form-data">
		<h1> BIENVENU DANS VOTRE PAGE D'ENVOI DE FICHIERS</h1><br/>
		<div>
	 
	 		<br/>
	 		<label>Selectionner un fichier</label>
	 		<br/>
	 		<br/><input type="file" name="file" /><br/>
	 		<br/>
	 		
	 		<input type="submit" value="ENVOYER" name="" action="index.php" class="envoyer" />
	 	</div>
	</form>
	
	<a href="Deconnexion.php" class="retour">Déconnexion</a>
	</body>
</html>