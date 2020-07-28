<?php

$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";

if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) { // TEST SUR l'EXISTENCE DU FICHIER ET SI IL EST EN ERREUR

	if ($_FILES['file']['size'] <= 1000000) { // TEST SUR LA TAILLE, EXPRIMEE EN OCTETS 
		$infoFile = pathinfo($_FILES['file']['name']);
		$extension = $infoFile['extension'];
		$extensionAutorisees = ['jpg', 'jpeg', 'gif', 'txt'];

		if (in_array($extension, $extensionAutorisees)) { // TEST SUR L'EXTENSION

			move_uploaded_file(
				$_FILES['file']['tmp_name']
				, 'uploads/' . basename($_FILES['file']['name'])
			);
			echo "L'envoie de " . $_FILES['file']['name'] . " a bel et bien fonctionné ! <br/>";
	    } else {
			echo "Mauvaise extension";
		}
	}
	echo "Fchier trop gros";
} else {
	echo "Fichier non existant";
}

