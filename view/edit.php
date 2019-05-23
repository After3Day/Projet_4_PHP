<?php if(isset($article)) {

	$title = $article->getName();
	$content = $article->getContent();
	$id = '/id/'.$article->getId();

	$action = 'update';
} else {
	$title = '';
	$content = '';
	$id = '';
	$action = 'create';
}
?>

<div class="container-fluid">
	<div class="row">	
		<div class="col-md-2">
			
		</div>
		<div class="col-md-8">
			<div class="container2">
				<div>
					<form method="post" action="<?php echo HOST.''.$action.''.$id;?>">
						<fieldset>
						<legend>Éditeur</legend>
						<label class="col-sm-4 control-label" for="title">Titre :</label><input name="title" type="text" id="title" class="form-control input-md" required="" value="<?php echo $title;?>"/><br />
						<textarea name="content" type="text" id="content"><?php echo $content;?></textarea><br />
					</fieldset>
					<input id="loginBut" class="btn btn-primary" type="submit" value="Soumettre" />
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2">
			
		</div>
	</div>
</div>