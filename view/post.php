<div class="container">
        <div class="row justify-content-center">
            <div class="">
                <div class="page-content">

				<div class="">
					<h3 ><?php echo $SPost->getName();?></h3>
					<br />
					<div class="PostContent"><?php echo $SPost->getContent();?></div>
					<br />
					<span class="AuthorName"><?php echo $SPost->getAuthor();?>,</span>
					<span class="CreatedAt"><?php echo $SPost->getCreatedAt()->format('d/m/Y');?></span>
				</div>

				<div class="contact-form">
					<h5>Ajouter un commentaire :</h5>
					<form method="post" action="<?php echo HOST.'comment/id/'.$SPost->getId();?>">
						<fieldset>
							
							<textarea name="content" type="text" id="content" style="height: 300px;"></textarea><br />
							<input id="loginBut" class="btn btn-primary" type="submit" value="Soumettre" />
						</fieldset>
					</form>
				</div>
			</div>

			<?php if(isset($Comments)):?>
				<h2>Commentaires</h2>
				<?php foreach($Comments as $comment):?>
					<?php if($comment->getRating() != 0 || $userSession->hasRole('admin')):?>
						<?php if($comment->getRating() != 1):?>
						<?php 	$color='red'?>
						<?php else :?>
						<?php 	 $color='black';?>
						<?php endif;?>
						<div class="container3" style="color: <?php echo $color;?>">
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
        </div>
    </div>
</div>