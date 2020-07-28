<?php

$serverName = 'localhost';
$bddUser = 'root';
$bddPass = '';
$dbName = 'phpdev';

try {
	$bdd = new PDO('mysql:host='.$serverName.';dbname='.$dbName.';charset=utf8', $bddUser, $bddPass);

	// $bdd = new mysqli("localhost", "root", "", "phpdev");

	
} catch (Exception $e) {
	die('Erreur : ' . $e ->getMessage());
}
