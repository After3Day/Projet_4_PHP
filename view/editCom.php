	
	<div class="commentForm">
		<form method="post" action="<?php echo HOST.'updateCom/postId/'.$CommentS->getIdPost().'/id/'.$CommentS->getId();?>">
			<fieldset>
				<legend>Modifier un commentaire : </legend>
				<textarea name="content" type="text" id="content"><?php echo $CommentS->getContent();?></textarea><br />
				<input id="loginBut" type="submit" value="Soumettre" />
			</fieldset>
		</form>
	</div>
