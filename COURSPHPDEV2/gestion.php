<?php 
	// Comme partout ailleurs ou nous aurions besoin de la BDD, nous appellons la config !
	require 'bdd/config.php';
?>

<!-- La table contenant les différentes entrées de ma BDD, donc ici, des utilisateurs -->
<h4>Gestion des utilisateurs</h4>
<div class="userList">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Email</th>
				<th>Password</th>
				<th>Options</th>
			</tr>
		</thead>

		<tbody>
			<?php
				// ICI J'appelle le "composant" qui affiche mes données
				include 'bdd/showUsers.php';
			?>
		</tbody>
	</table>
</div>
<hr>

<!-- ICI j'affiche le formulaire pour inscrire un nouvel utilisateur -->
<h4>Création d'un nouvel utilisateur</h4>
<form class="form-group" method="post" action="bdd/createUser.php">
	<label for="nom">Nom :</label>
	<input type="text" id="nom" name="nom"><br/>
	<label for="prenom">Prenom :</label>
	<input type="text" id="prenom" name="prenom"><br/>
	<label for="email">Email : </label>
	<input type="email" id="email" name="email"><br/>
	<label for="password">Password : </label>
	<input type="password" id="password" name="password"><br/>
	<input type="submit" value="OK" />
</form>