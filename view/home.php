<div class="regular-page-wrap ">
    <div class="container container2">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="page-content">
				<h2>Mon dernier Post</h2>
					<div  class="">
						<a class="link" href="<?php echo HOST.'post/id/'.$LastPost->getId();?>"><h3><?php echo $LastPost->getName();?></h3></a>
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
							<a class="link" href="<?php echo HOST.'post/id/'.$LastPost->getId();?>">Commenter</a>
						</div>				
					</div>
				</div>
            </div>
        </div>
    </div>
</div> 