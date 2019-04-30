<div id="login">
	<form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
		<fieldset>
			<legend> Formulaire d'incription </legend>
			<label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /> <br />
			<label for="password">Mot de Passe :</label><input type="password" name="password" id="password" /><br />
			<label for="confirm">Confirmer le mot de passe :</label><input type="password" name="confirm" id="confirm" /><br />
			<label for="pseudo">Nom :</label><input name="surname" type="text" id="surname" /><br />
			<label for="pseudo">Prénom :</label><input name="name" type="text" id="name" /><br />
			<label for="email">Votre adresse Mail :</label><input type="text" name="email" id="email" /><br />
			<label for="birthday">Date de naissance :</label><input name="birthday" type="date" id="birthday" /><br />
			<label for="role"></label><input name="role" type="hidden" id="role" value="user" />		
		</fieldset>
		<p id='test'>
			<input id="loginBut" name="loginBut" type="submit" value="Inscription" />
		</p>
	</form>
</div>