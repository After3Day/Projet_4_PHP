
<?php if(isset($Comments)):?>
<h2 >Commentaires</h2>
<div class="container">
	<?php foreach($Comments as $comment):?>
		<div class="post">
			<div class="PostContent"><?php echo $comment->getContent();?></div>
			<br />
			<span class="AuthorName"><?php echo $comment->getPseudo();?>,</span>
			<span class="CreatedAt"><?php echo $comment->getCreatedAt()->format('d/m/Y');?></span>
		</div>
	<?php endforeach;?>
</div>
<?php endif;?>