<?php if(isset($user) || isset($errors)){
	$pseudo = $user->getPseudo();
	$name = $user->getName();
	$surname = $user->getSurname();
	$email = $user->getEmail();
	$errorsMail = $user->getErrorsMail();
	$errorsPseudo = $user->getErrorsPseudo();

	$ErrPseudo = $errors->getErrPseudo();
	$ErrPass = $errors->getErrPass();
	$ErrConf = $errors->getErrConf();
	$ErrName = $errors->getErrName();
	$ErrSurname = $errors->getErrSurname();
	$ErrEmail = $errors->getErrEmail();
} else {
	$pseudo = '';
	$name = '';
	$surname = '';
	$email = '';
	$errorsPseudo = '';
	$errorsMail = '';

	$ErrPseudo = '';
	$ErrPass = '';
	$ErrConf = '';
	$ErrName = '';
	$ErrSurname = '';
	$ErrEmail = '';
}
?>

<div class="regular-page-wrap ">
	<div class="container container2">
		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-12">
				<div class="contact-form">
					<h5>Formulaire d'inscription</h5>
					<form class="form-horizontal" method="post" action="register" enctype="multipart/form-data">
					<fieldset>
						<!-- Pseudo input-->
							<div class="group" style="max-width: 50%;">
								<span class="help-block" style="color:red;"><?php echo $errorsPseudo;?></span>
	                            <input type="text" name="pseudo" id="pseudo"  value="<?php echo $pseudo;?>" required>
	                            <span class="highlight"></span>
	                            <span class="bar"></span>
	                            <label for="pseudo">Pseudo</label>
	                            <span class="help-block">4 à 16 caractères, lettres ou chiffres</span>
								<span class="help-block" style="color:red;"><?php echo $ErrPseudo?></span>
	                        </div>

	                    <!-- Password input-->
							<div class="group" style="max-width: 50%;">
	                            <input type="password" name="password" id="password"  value="" required>
	                            <span class="highlight"></span>
	                            <span class="bar"></span>
	                            <label for="password">Mot de passe</label>
	                            <span class="help-block">5 à 16 caractères, lettres ou chiffres</span>
								<span class="help-block" style="color:red;"><?php echo $ErrPass;?></span>
	                        </div>

	                    <!-- Password Confirm input-->
							<div class="group" style="max-width: 50%;">
	                            <input type="password" name="confirm" id="confirm"  value="" required>
	                            <span class="highlight"></span>
	                            <span class="bar"></span>
	                            <label for="confirm">Confirmation de mot de passe</label>
	                            <span class="help-block" style="color:red;"><?php echo $ErrConf;?></span>
	                        </div>

	                    <!-- Name input-->
							<div class="group" style="max-width: 50%;">
	                            <input type="text" name="surname" id="surname"  value="<?php echo $surname;?>" required>
	                            <span class="highlight"></span>
	                            <span class="bar"></span>
	                            <label for="surname">Nom de Famille</label>
	                            <span class="help-block">4 à 16 caractères</span>
								<span class="help-block" style="color:red;"><?php echo $ErrSurname;?></span>
	                        </div>

	                    <!-- Surname input-->
							<div class="group" style="max-width: 50%;">
	                            <input type="text" name="name" id="name"  value="<?php echo $name;?>" required>
	                            <span class="highlight"></span>
	                            <span class="bar"></span>
	                            <label for="name">Prénom</label>
	                            <span class="help-block">4 à 16 caractères</span>
								<span class="help-block" style="color:red;"><?php echo $ErrName;?></span>
	                        </div>

	                    <!-- Email input-->
							<div class="group" style="max-width: 50%;">
								<span class="help-block" style="color:red;"><?php echo $errorsMail;?></span>
	                            <input type="text" name="email" id="email"  value="<?php echo $email;?>" required>
	                            <span class="highlight"></span>
	                            <span class="bar"></span>
	                            <label for="email">E-mail</label>
	                            <span class="help-block" style="color:red;"><?php echo $ErrEmail;?></span>
	                        </div>

						<!-- Button -->
						<div class="form-group">
							<label class="col-sm-4 control-label" for="loginBut"></label>
							<div class="col-sm-4">
							<button id="loginBut" name="loginBut" class="btn btn-primary">Inscription</button>
							</div>
						</div>

					</fieldset>
				</form>
			</div>
			</div>
		<div class="col-xs-2 hidden-sm-down"></div>
	</div>
</div>	