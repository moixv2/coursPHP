<!-- La VUE du login, ici nous avons tout simplement un formulaire envoyant vers la FONCTION de login -->
<div class="login">
	<h4>Login :</h4>
	<form class="form-group" method="post" action="bdd/login.php">
		<label for="emailLogin">Email : </label>
		<input type="email" id="emailLogin" name="emailLogin"><br/>
		<label for="passwordLogin">Password : </label>
		<input type="password" id="passwordLogin" name="passwordLogin"><br/>
		<input type="submit" value="OK" />
	</form>
</div>