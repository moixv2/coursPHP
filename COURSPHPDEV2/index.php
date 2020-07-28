<?php 
	// PREMIER PAS, NOUS APPELLONS LA CONFIG DE NOTRE BDD, c'est elle qui nous connecte a la base de données
	// DEUXIEMEMENT, nous appellons la fonction login
	// TROISIEMEMENT, on initialise la session
	require 'bdd/config.php';
	require 'bdd/login.php';
	session_start();
?>

<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
		<link rel="stylesheet" href="style.css">
	</head>

	<body>
		<!-- La NavBar a tout simplement été "include" dans le HTML -->
		<?php include 'navbar.php' ?>

		<!-- Un conteneur wrap qui contiendra le gros de l'application -->
		<div class="wrap">
			<!-- Si la session est null, donc inexistante, afficher la page de login, sinon, afficher la page de gestion d'utilisateurs -->
			<?php 
				if ($_SESSION == null) {
					include('login.php');
				} else {
					include('gestion.php');
				}
			?>
		</div>

		
	</body>
</html>

<!-- Code crée par Christophe Crognier dans le cadre d'une formation a l'institut F2i
Utilisez et réutilisez ce code comme bon vous semble! -->