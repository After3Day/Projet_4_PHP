<h2 >Mes Posts</h2>
<div class="container">
	<?php foreach($Posts as $post):?>
		<div class="post">
			<h3><?php echo $post->getName();?></h3>
			<br />
			<div class="PostContent"><?php echo $post->getContent();?></div>
			<br />
			<span class="AuthorName"><?php echo $post->getAuthor();?>,</span>
			<span class="CreatedAt"><?php echo $post->getCreatedAt();?></span>			
		</div>
	<?php endforeach;?>
</div>
