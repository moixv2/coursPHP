<?php
	// APPEL A MA CONFIG DE BDD
	include 'config.php';

	$userId = (isset($_GET['id'])) ? $_GET['id'] : ""; // Stocker l'id utilisateur en variable
	$req = $bdd->prepare('DELETE FROM user WHERE id=' . $userId); // Préparer la requête pour effacer l'utilisateur dont l'id correspond a $userId

	// Petit try catch, si la requête s'éxécute nous redirigeons vers l'index, sinon, nous affichons un message d'erreur!
	try {
		$req->execute();
		header('Location: /COURSPHPDEV/index.php');
	} catch (Exception $e) {
		echo "Erreur dans la suppression de l'utilisateur !";
	}
