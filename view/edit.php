<?php if(isset($article)) {

	$title = $article->getName();
	$content = $article->getContent();
	$author = $article->getAuthor();
	$id = '/id/'.$article->getId();

	$action = 'update';
} else {
	$title = '';
	$content = '';
	$author = '';
	$id = '';
	$action = 'create';
}
?>


<div>
	<form method="post" action="<?php echo HOST.''.$action.''.$id;?>">
		<fieldset>
		<legend>Éditeur</legend>
		<label for="title">Titre :</label><input name="title" type="text" id="title" value="<?php echo $title;?>"/><br />
		<textarea name="content" type="text" id="content"><?php echo $content;?> <?php echo $action;?></textarea><br />
		<label for="author">Auteur :</label><input name="author" type="text" id="author" value="<?php echo $author;?>" /><br />
		<!--<label for="createdAt">Date :</label><input name="createdAt" type="Date" id="createdAt" /><br />-->
	</fieldset>
	<input id="loginBut" type="submit" value="Soumettre" />
	</form>
</div>