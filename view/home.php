<div class="container-fluid">
	<div class="row">	
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
		<h2>Mon dernier Post</h2>
				<div  class="post">
					<a href="<?php echo HOST.'post/id/'.$LastPost->getId()?>"><h3><?php echo $LastPost->getName();?></h3></a>
					<br />
					<div class="PostContent"><?php echo $LastPost->getContent();?></div>
					<br />
					<div>
						<span class="AuthorName"><?php echo $LastPost->getAuthor();?>,</span>
						<span class="CreatedAt"><?php echo $LastPost->getCreatedAt()->format('d/m/Y');?></span>
						<?php if($userSession->hasRole('admin')):?>
						<a href="<?php echo HOST.'edit/id/'.$LastPost->getId()?>">Éditer</a>
						<a href="<?php echo HOST.'delete/id/'.$LastPost->getId()?>">Supprimer</a>
						<?php endif;?>
						<?php if($userSession->isLogged()):?>	
						<a href="<?php echo HOST.'comment/id/'.$LastPost->getId()?>">Commenter</a>
						<?php endif;?>
					</div>				
				</div>
			</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>