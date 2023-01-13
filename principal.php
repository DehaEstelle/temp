<?php
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Page principale</title>
		<link rel="stylesheet" type="text/css" href="principal.css"/>
		<script type="text/javascript">
			<script type="text/javascript" src="menu.js"></script>
		</script>
	</head>
	<body >
		<h1 style="text-align: center;">MENU PRINCIPAL</h1>
		<div id="container">
			<ul class="nav">
				<li>
					<a href="">EMPLOYES</a>
					<ul class="drowp">
						<li><a href="Ajouter.php">Ajouter les employes</a></li><br/>
						<li><a href="Modifier.php">Modifier les employes</a></li><br/>
						<li><a href="Supprimer.php">Supprimer les emplyes</a></li><br/>
					</ul>
				</li>
				<li>
					<a href="">FICHIERS</a>
					<ul class="drowp">
						<li><a href="Fichiers.php">Envoyer des des fichiers</a></li>
						<li><a href="Liste.php">Consulter les fichiers disponibles</a></li>
					</ul>
				</li>
				<li>
					<a href="">AUTRES</a>
				</li>

			</ul>
			<li>
					<a href="">CONNEXION</a>
					<ul>
						<a href="administrateur.php">Administrateur</a>
						<a href="authentification.php">Employé</a>
					</ul>
				</li>
		</div>			

 		
	</body>
</html>