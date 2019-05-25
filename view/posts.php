
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="page-content">
					<h2 >Mes Posts</h2>
					<?php foreach($Posts as $post):?>
					<div class="container3">
						<a class="link" href="<?php echo HOST.'post/id/'.$post->getId()?>"><h3><?php echo $post->getName();?></h3></a>
						<br />
						<div class="PostContent"><?php echo substr($post->getContent(), 0, 1000);?>...<a class="link" href="<?php echo HOST.'post/id/'.$post->getId()?>"><b>Suite</b></a></div>
						<br />
						<span class="AuthorName"><?php echo $post->getAuthor();?>,</span>
						<span class="CreatedAt"><?php echo $post->getCreatedAt()->format('d/m/Y');?></span>
						<?php if($userSession->hasRole('admin')):?>
						<a class="link" href="<?php echo HOST.'edit/id/'.$post->getId()?>">Éditer</a>
						<a class="link" href="<?php echo HOST.'delete/id/'.$post->getId()?>">Supprimer</a>
						<?php endif;?>
						<?php if($userSession->isLogged()):?>
						<a class="link" href="<?php echo HOST.'post/id/'.$post->getId();?>">Commenter</a>
						<?php endif;?>
					</div>
					<?php endforeach;?>
				</div>
            </div>
        </div>
    </div>


