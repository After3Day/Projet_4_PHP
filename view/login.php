<?php if(isset($user)){
	$pseudo = $user->getPseudo();
	$errors = $user->getErrorsPseudo();
} else {
	$pseudo = '';
	$errors = '';
}
?>


<div class="container-fluid">
	<div class="row">	
		<div class="col-sm-2 hidden-sm-down">
			
		</div>
		<div class="col-sm-8">
			<div class="container2">
				<div class="post">
					<form class="form-horizontal" method="post" action="connexion.php" enctype="multipart/form-data">
						<fieldset>

						<!-- Form Name -->
						<legend>Connexion</legend>

							<!-- Text input-->
							<div class="form-group">
								<label class="col-sm-4 control-label" for="pseudo">Pseudo</label>  
								<div class="col-sm-4">
								<input id="pseudo" name="pseudo" type="text" value="<?php echo $pseudo;?>" class="form-control input-md" required="">
								<span class="help-block" style="color:red;"><?php echo $errors;?></span>
								</div>
							</div>

							<!-- Password input-->
							<div class="form-group">
							  <label class="col-sm-4 control-label" for="password">Mot de passe</label>
							  <div class="col-sm-4">
							    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
							  </div>
							</div>

							
							<!-- Button (Double) -->
							<div class="form-group">
							  <label class="col-sm-4 hidden-xs-down control-label" for="button1id"></label>
							  <div class="col-sm-8">
							    <button id="button1id" name="button1id" class="btn btn-primary">Connexion</button>
							    <a id="registerLink" name="registerLink" class="btn btn-link" href="<?php echo HOST;?>registerForm">Pas encore inscrit ?</a>
							  </div>
							</div>

						</fieldset>
					</form>
				</div>
			</div>
		<div class="col-sm-2 hidden-sm-down"></div>
	</div>
</div>					