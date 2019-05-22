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

<div class="container-fluid">
	<div class="row">	
		<div class="col-sm-2 hidden-sm-down">
			
		</div>
		<div class="col-sm-10">
			<div class="container2">
				<form class="form-horizontal" method="post" action="register" enctype="multipart/form-data">
					<fieldset>

					<!-- Form Name -->
					<legend>Formulaire d'inscritpion</legend>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-sm-4 control-label" for="pseudo">Pseudo</label>  
							<div class="col-sm-4">
							<span class="help-block" style="color:red;"><?php echo $errorsPseudo;?></span>
							<input id="pseudo" name="pseudo" type="text" placeholder="" value="<?php echo $pseudo;?>" class="form-control input-md" required="">
							<span class="help-block">4 à 16 caractères, lettres ou chiffres</span>
							<span class="help-block" style="color:red;"><?php echo $ErrPseudo?></span>
							</div>
						</div>

						<!-- Password input-->
						<div class="form-group">
							<label class="col-sm-4 control-label" for="password">Mot de passe</label>
							<div class="col-sm-4">
							<input id="password" name="password" type="password" placeholder="" value="" class="form-control input-md" required="">
							<span class="help-block">5 à 16 caractères, lettres ou chiffres</span>
							<span class="help-block" style="color:red;"><?php echo $ErrPass;?></span>
							</div>
						</div>

						<!-- Password input-->
						<div class="form-group">
							<label class="col-sm-4 control-label" for="confirm">Confirmation de mot de passe</label>
							<div class="col-sm-4">
							<input id="confirm" name="confirm" type="password" placeholder="" value="" class="form-control input-md" required="">
							<span class="help-block" style="color:red;"><?php echo $ErrConf;?></span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-sm-4 control-label" for="surname">Nom</label>  
							<div class="col-sm-4">
							<input id="surname" name="surname" type="text" placeholder="" value="<?php echo $surname;?>" class="form-control input-md" required="">
							<span class="help-block">4 à 16 caractères</span>
							<span class="help-block" style="color:red;"><?php echo $ErrSurname;?></span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-sm-4 control-label" for="name">Prénom</label>  
							<div class="col-sm-4">
							<input id="name" name="name" type="text" placeholder="" value="<?php echo $name;?>" class="form-control input-md" required="">
							<span class="help-block">4 à 16 caractères</span>
							<span class="help-block" style="color:red;"><?php echo $ErrName;?></span>
							</div>
						</div>

						<!-- Text input-->
						<div class="form-group">
							<label class="col-sm-4 control-label" for="email">Votre adresse Mail</label>  
							<div class="col-sm-4">
							<span class="help-block" style="color:red;"><?php echo $errorsMail;?></span>
							<input id="email" name="email" type="text" placeholder="" value="<?php echo $email;?>" class="form-control input-md" required="">
							<span class="help-block" style="color:red;"><?php echo $ErrEmail;?></span>
							</div>
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