<?php

// REQUETE SQL !
$showUsers = $bdd->query('SELECT * FROM user');

// ICI, nous bouclons sur notre LISTE d'utilisateur, et la fonction fetch() nous permet de récupérer chacun d'eux, un par un, nous allons ensuite récupérer les données
while ($data = $showUsers->fetch()) {

	$id = htmlspecialchars($data['id']);
	$nom = htmlspecialchars($data['nom']);
	$prenom = htmlspecialchars($data['prenom']);
	$email = htmlspecialchars($data['email']);
	$password = htmlspecialchars($data['password']);

	$eraseButton = "<a href='bdd/eraseUser.php/?id=$id'><i class='fas fa-trash'></i></a>";

	echo "
		<tr>
			<td>$id</td>
			<td>$nom</td>
			<td>$prenom</td>
			<td>$email</td>
			<td>$password</td>
			<td>
				$eraseButton
			</td>
		</tr>

		<tr class=\"hidden-form-$id\">
			<form class='form-group' method='post' action='bdd/updateUser.php/?id=$id'>
				<td></td>
				<td>
					<label for='updatedNom'>Nom :</label>
					<input type='text' id='updatedNom' name='updatedNom' value='$nom'><br/>
				</td>
				<td>
					<label for='updatedPrenom'>Prenom :</label>
					<input type='text' id='updatedPrenom' name='updatedPrenom' value='$prenom'>
				</td>
				<td>
					<label for='updatedEmail'>Email : </label>
					<input type='email' id='updatedEmail' name='updatedEmail' value='$email'>
				</td>
				<td>
					<label for='updatedPassword'>Password : </label>
					<input type='password' id='updatedPassword' name='updatedPassword' value='$password'>
				</td>
				<td>
					<input type='submit' value='OK' />
				</td>
			</form>
		</tr>";
}