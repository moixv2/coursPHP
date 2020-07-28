<?php 
require 'config.php';

// ICI, NOUS ENVOYONS NOS DONNEES VERS LA FONCTION DE VALIDATION CREEE AUPARAVANT
$nom = (isset($_POST['nom'])) ? $_POST['nom'] : "";
$prenom = (isset($_POST['prenom'])) ? $_POST['prenom'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? $_POST['password'] : "";

// HASHAGE DU MOT DE PASSE
$hash = password_hash($password, PASSWORD_DEFAULT);

// PREPARATION DE LA REQUETE SQL
$req = $bdd->prepare('INSERT INTO user(nom, prenom, email, password) VALUES(:nom, :prenom, :email, :password)');

// TRY = Lancement de la requête SQL et redirection
// CATCH = Renvoyer un message d'erreur.
try {
	$req->execute(array(
		'nom' => $nom,
		'prenom' => $prenom,
		'email' => $email,
		'password' => $hash
		));
	header('Location: /COURSPHPDEV/index.php');
} catch (Exception $e) {
	echo "Erreur d'inscription, vérifiez vos informations !";
}