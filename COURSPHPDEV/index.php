<?php
	require 'bdd/config.php';
?>

<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
	</head>

	<body>
		<h3>Bienvenu</h3>

		<div class="userList">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nom</th>
						<th>Prenom</th>
						<th>Email</th>
						<th>Password</th>
					</tr>
				</thead>

				<tbody>
					<?php
						$showUsers = $bdd->query('SELECT * FROM user');
						while ($data = $showUsers->fetch()) {
							$id = $data['id'];
							$nom = $data['nom'];
							$prenom = $data['prenom'];
							$email = $data['email'];
							$password = $data['password'];

							echo "<tr>
									<td>$id</td>
									<td>$nom</td>
									<td>$prenom</td>
									<td>$email</td>
									<td>$password</td>
								</tr>";
						}
					?>
				</tbody>
			</table>
		</div>

		<form class="form-group" method="post" action="formulaire.php" enctype="multipart/form-data">

			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="nom"><br/>
			<label for="prenom">Prenom :</label>
			<input type="text" id="prenom" name="prenom"><br/>
			<label for="email">Email : </label>
			<input type="email" id="email" name="email"><br/>
			<label for="password">Password : </label>
			<input type="password" id="password" name="password"><br/>
<!--
			<label for="check">Checkbox : </label>
			<input type="checkbox" id="check" name="check"><br/>

			<label for="message">Textarea : </label>
			<textarea name="message" rows="3" cols="30">
			</textarea><br/>

			<label for="select">Voiture : </label>
			<select id="select" name="select">
			  <option value="volvo">Volvo</option>
			  <option value="saab">Saab</option>
			  <option value="fiat">Fiat</option>
			  <option value="audi">Audi</option>
			</select><br/>

			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label><br>
			<input type="radio" id="female" name="gender" value="female">
			<label for="female">Female</label><br>

			<label for="file">File :</label>
            <input type="file" name="file" /><br /> -->

			<input type="submit" value="OK" />
   		</form>

	</body>
</html>
