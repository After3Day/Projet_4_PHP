<h2 >Mes Posts</h2>
<div class="container">
	<?php foreach($Posts as $post):?>
		<div class="post">
			<a href="<?php echo HOST.'post/id/'.$post->getId()?>"><h3><?php echo $post->getName();?></h3></a>
			<br />
			<div class="PostContent"><?php echo $post->getContent();?></div>
			<br />
			<span class="AuthorName"><?php echo $post->getAuthor();?>,</span>
			<span class="CreatedAt"><?php echo $post->getCreatedAt()->format('d/m/Y');?></span>
			<a href="<?php echo HOST.'edit/id/'.$post->getId()?>">Éditer</a>
			<a href="<?php echo HOST.'delete/id/'.$post->getId()?>">Supprimer</a>
			<!--<a href="<?php //echo HOST.'comment/id/'.$post->getId()?>">Commenter</a> -->
		</div>
	<?php endforeach;?>
	<!--<?php //foreach ($Comments as $comment):?>
		<div>
			<span><?php// echo $comment->getPseudo();?></span>
			<span><?php //echo $comment->getContent();?></span>
			<span><?php //echo $comment->getDate();?></span>
			<span><?php //echo $comment->getRating();?></span>
			<span><?php //echo $comment->getId();?></span>
		</div>
	<?php //endforeach;?>-->
</div>
