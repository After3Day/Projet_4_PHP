<div id="login">
	<form method="post" action="connexion.php">
		<fieldset>
			<legend>Connexion</legend>
				<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
				<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
		</fieldset>
		<p id='test'>
			<input id="loginBut" type="submit" value="Connexion" />
			<a id="registerLink" href="<?php echo HOST;?>registerForm">Pas encore inscrit ?</a>
		</p>
	</form>
</div>