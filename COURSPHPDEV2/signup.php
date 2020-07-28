<?php 
	// Encore une fois, l'appel de ma config de BDD, ainsi que un session_start pour récupérer les variables de SESSION
	require 'bdd/config.php';
	session_start();
?>

<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<!-- Nous appellons la navbar ainsi que le formulaire d'inscription -->
		<?php include 'navbar.php' ?>
		<div class="wrap">
			<h4>Création d'un nouvel utilisateur</h4>
			<form class="form-group" method="post" action="bdd/createUser.php">
				<label for="nom">Nom :</label>
				<input type="text" id="nom" name="nom"><br/>
				<label for="prenom">Prenom :</label>
				<input type="text" id="prenom" name="prenom"><br/>
				<label for="email">Email : </label>
				<input type="email" id="email" name="email"><br/>
				<label for="password">Password : </label>
				<input type="password" id="password" name="password"><br/>
				<input type="submit" value="OK" />
			</form>
		</div>
	</body>
</html>