<div class="container-fluid">
	<div class="row">	
		<div class="col-md-1 hidden-md-down">
			
		</div>
		<div class="col-md-10">
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
				<?php foreach($Comments as $comment):?>
					<?php if($comment->getRating() != 0 || $userSession->hasRole('admin')):?>
						<?php if($comment->getRating() != 1):?>
						<?php 	$color='red' ?>
						<?php else :?>
						<?php 	 $color='black';?>
						<?php endif;?>
						<div class="container2" style="color: <?php echo $color?>">
							<div class="post">
								<div class="PostContent"><?php echo $comment->getContent();?></div>
								<br />
								<span class="AuthorName"><?php echo $comment->getPseudo();?>,</span>
								<span class="CreatedAt"><?php echo $comment->getCreatedAt()->format('d/m/Y');?></span>
								<?php if(($comment->getPseudo() === $userSession->getPseudo()) || $userSession->hasRole('admin')):?>
								<a href="<?php echo HOST.'editCom/postId/'.$SPost->getId().'/id/'.$comment->getId();?>">Éditer</a>
								<a href="<?php echo HOST.'deleteCom/postId/'.$SPost->getId().'/id/'.$comment->getId();?>">Supprimer</a>
								<?php endif;?>
								<?php if($userSession->isLogged() && ($comment->getRating() != 0)):?>
								<a href="<?php echo HOST.'report/postId/'.$SPost->getId().'/id/'.$comment->getId();?>">Reporter </a>
								<?php endif;?>
							</div>
						</div>
					<?php endif;?>
				<?php endforeach;?>
			<?php endif;?>
		</div>
		<div class="col-md-1 hidden-md-down"></div>
	</div>
</div>			