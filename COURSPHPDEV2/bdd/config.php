<?php

// ICI nous allons nous connecter a la BASE DE DONNEES
// Premièrement nous conservons en variables les informations importantes(celle-ci sont souvent stockées en variables GLOBALES pour y avoir accès partout dans l'application, dans ce cas précis, nous allons nous contenter de les utiliser ici seulement)
$serverName = 'localhost';
$bddUser = 'root';
$bddPass = '';
$dbName = 'phpdev';

// Un simple try catch pour la connexion a la BDD, si tout va bien, nous n'avons aucune erreur qui s'affiche, si une erreur survient, elle sera récupérée puis affichée.
try {
	$bdd = new PDO('mysql:host='.$serverName.';dbname='.$dbName.';charset=utf8', $bddUser, $bddPass);	
} catch (Exception $e) {
	die('Erreur : ' . $e ->getMessage());
}
