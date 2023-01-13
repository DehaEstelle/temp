<?php 
	include('connecxion.php');
	if (isset($_POST['supprimer']) && $_POST['supprimer']=='SUPPRIMER') {
		# code...
		$sql=$bdd->query("DELETE * FROM fichier WHERE id='$_POST[supprimer]'") or die("Erreur: problème avec la requete $sql");
	}else{
		$_erreur='<label style="color:red;">Erreur: Veillez selectionner un fichier</label>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Liste de fichiers envoyés </title>
	<link rel="stylesheet" type="text/css" href="Liste.css">
</head>
<body>
	<h1>Liste des fichiers envoyés</h1>
	<a href="index.php" class="retour"> Retour au menu principal</a><br/>
	<div>
		<table>
			<thead>
				<tr class="bouger1">
					<th>Nom du fichier</th>
					<th>Emplacement</th>
					<th>Auteur</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				
				$sql=$bdd->query(' SELECT nom, emplacement, employe, jour FROM fichiers ');
				while ($data = $sql->fetch()) {?>
					<tr class="bouger">
						<td><?php 
						echo $data['nom'] ; ?></td>
						<td><?php 
						echo $data['emplacement']; ?></td>
						<td><?php 
						echo $data['employe']; ?></td>
						<td><?php 
						echo $data['jour']   .'<a href="'.$data['emplacement'].'">Télécharger  </a >'; ?></td>
						<td></td>
					</tr><?php 

				}?>



				 
			</tbody>
		</table>
	</div>

</body>
</html>


















	
	<!--<?php
	include('connecxion.php');

	$sql=$bdd->query(' SELECT nom, emplacement, employe, jour FROM fichiers ');
	while ($data = $sql->fetch()) {
		# code...
		echo $data['nom'],': ', $data['emplacement'],'. ', $data['employe'],'. ', $data['jour'].':    ' .'<a href="'.$data['emplacement'].'">Télécharger  </a ><br/>';
	}
	?>-->