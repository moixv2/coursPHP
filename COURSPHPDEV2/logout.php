<?php

// VOILA GLOBALEMENT comment gérer une deconnexion

session_start(); // Pour s'assurer que l'on utilise la même session
session_destroy(); // Destruction de cette session
header('Location: /COURSPHPDEV/index.php'); // Redirection vers la page principale(qui devrait afficher le login a présent)
exit();