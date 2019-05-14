

<div class="container">

	<div class="post">
		<h3><?php echo $SPost->getName();?></h3>
		<br />
		<div class="PostContent"><?php echo $SPost->getContent();?></div>
		<br />
		<span class="AuthorName"><?php echo $SPost->getAuthor();?>,</span>
		<span class="CreatedAt"><?php echo $SPost->getCreatedAt()->format('d/m/Y');?></span>
	</div>

	<div class="commentForm">
		<form method="post" action="<?php echo HOST.'comment/id/'.$SPost->getId();?>">
			<fieldset>
				<legend>Ajouter un commentaire :</legend>
				<textarea name="content2" type="text" id="content"></textarea><br />
				<input id="loginBut" type="submit" value="Soumettre" />
			</fieldset>
		</form>
	</div>

</div>