<div class="container-fluid">
	<div class="row">	
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<div class="container2">

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
							<input id="loginBut" class="btn btn-primary" type="submit" value="Soumettre" />
						</fieldset>
					</form>
				</div>
			</div>

			<?php if(isset($Comments)):?>
			<h2 >Commentaires</h2>
			<div class="container2">
				<?php foreach($Comments as $comment):?>
					<div class="post">
						<div class="PostContent"><?php echo $comment->getContent();?></div>
						<br />
						<span class="AuthorName"><?php echo $comment->getPseudo();?>,</span>
						<span class="CreatedAt"><?php echo $comment->getCreatedAt()->format('d/m/Y');?></span>
						<?php if(($comment->getPseudo() === $userSession->getPseudo()) || $userSession->hasRole('admin')):?>
						<a href="<?php echo HOST.'editCom/postId/'.$SPost->getId().'/id/'.$comment->getId();?>">Éditer</a>
						<a href="<?php echo HOST.'deleteCom/postId/'.$SPost->getId().'/id/'.$comment->getId();?>">Supprimer</a>
							<?php if($userSession->isLogged()):?>
							<a href="<?php echo HOST.'report/postId/'.$SPost->getId().'/id/'.$comment->getId();?>">Reporter </a><?php echo $comment->getRating();?>
							<?php endif;?>	
						<?php endif;?>
					</div>
				<?php endforeach;?>
			</div>
			<?php endif;?>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>			