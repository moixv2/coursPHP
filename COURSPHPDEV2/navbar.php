<!-- UNE NAVBAR SIMPLE EN BOOTSTRAP -->
<nav class="navbar navbar-dark bg-dark justify-content-between">
  <a class="navbar-brand">Back-office</a>
  <a href="index.php">Home</a>
  <?php 
  	// ICI nous allons afficher le bouton d'inscription si la session est NULL, sinon, nous affichons tout simplement le bouton de déconnexion
  	if ($_SESSION == null) {
  		echo '<a href="signup.php">Sign Up</a>';
  	} else {
  		echo '<a href="logout.php">Logout</a>';
  	}
  ?>
</nav>