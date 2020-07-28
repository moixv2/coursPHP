<?php 
	// DE NOUVEAU, appel a la config de la BDD
	include 'config.php'; 

	// Stockage en variable de toutes les données necessaires a préparer ma requête
	$id = $_GET['id'];
	$nom = $_POST['updatedNom'];
	$prenom = $_POST['updatedPrenom'];
	$email = $_POST['updatedEmail'];
	$password = $_POST['updatedPassword'];
	$hash = password_hash($password, PASSWORD_DEFAULT); // Hashage du mot de passe

	// Préparation de la requête UPDATE USER
	$query = "UPDATE user SET nom = '$nom', prenom = '$prenom', email = '$email', password = '$hash' WHERE id = $id";
	$req = $bdd->prepare($query);

	// Petit try catch, si la requête s'éxécute nous redirigeons vers l'index, sinon, nous affichons un message d'erreur!
	try {
		$req->execute();
		header('Location: /COURSPHPDEV/index.php');
	} catch (Exception $e) {
		echo "Erreur d'inscription !";
	}
