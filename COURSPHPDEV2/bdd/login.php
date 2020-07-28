<?php 
require 'config.php'; // Toujours mon appel aux config de la BDD pour y avoir accès.

// Si l'email de login existe, je continue...
if (isset($_POST['emailLogin'])) {

	// Je sauvegarde en variables l'email et le mot de passe !
	$email = (isset($_POST['emailLogin'])) ? $_POST['emailLogin'] : "";
	$password = (isset($_POST['passwordLogin'])) ? $_POST['passwordLogin'] : "";

	// Je prépare la requête et l'éxécute!
	$req = $bdd->prepare('SELECT id, password FROM user WHERE email = :email');
	$req->execute(array(
		'email' => $email
	));
	$resultat = $req->fetch();

	// Cette fonction permet de comparer le HASH que l'utilisateur vient d'utiliser pour le login, avec le HASH contenu en base de donnée.
	$passwordGood = password_verify($password, $resultat['password']);
	// Si les résultats ne sont pas trouvé en base, message d'erreur, sinon, on commence une session dans laquelle on inscrira les différentes informations !
	if (!$resultat) {
		echo 'Mauvais identifiant ou mauvais mot de passe';
		header('Location: /COURSPHPDEV/index.php');
	} else {
		if ($passwordGood) {
			session_start();
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			echo "Vous etes bel et bien connecté !";
			header('Location: /COURSPHPDEV/index.php');
		} else {
			echo "Mauvais identifiant ou mauvais mot de passe";
			header('Location: /COURSPHPDEV/index.php');
		}
	}

}
