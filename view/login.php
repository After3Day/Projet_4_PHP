<div id="login">
	<form class="form-horizontal" method="post" action="connexion.php" enctype="multipart/form-data">
		<fieldset>

		<!-- Form Name -->
		<legend>Connexion</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="pseudo">Pseudo</label>  
			  <div class="col-md-4">
			  <input id="pseudo" name="pseudo" type="text" placeholder="" class="form-control input-md" required="">
			    
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="password">Mot de passe</label>
			  <div class="col-md-4">
			    <input id="password" name="password" type="password" placeholder="" class="form-control input-md" required="">
			    <span class="help-block">5 caractères minimums</span>
			  </div>
			</div>

			
			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="button1id"></label>
			  <div class="col-md-8">
			    <button id="button1id" name="button1id" class="btn btn-primary">Connexion</button>
			    <a id="registerLink" name="registerLink" class="btn btn-default" href="<?php echo HOST;?>registerForm">Pas encore inscrit ?</a>
			  </div>
			</div>

		</fieldset>
	</form>
</div>