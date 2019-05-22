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
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<div class="container2">
<div>
	<form method="post" action="<?php echo HOST.''.$action.''.$id;?>">
		<fieldset>
		<legend>Éditeur</legend>
		<label for="title">Titre :</label><input name="title" type="text" id="title" value="<?php echo $title;?>"/><br />
		<textarea name="content" type="text" id="content"><?php echo $content;?></textarea><br />
	</fieldset>
	<input id="loginBut" type="submit" value="Soumettre" />
	</form>
</div>
</div>
</div>
</div>
</div>