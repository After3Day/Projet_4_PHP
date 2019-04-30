<h2>Mon dernier Post</h2>
<div class="container">
		<div class="post">
			<h3><?php echo $LastPost->getName();?></h3>
			<br />
			<div class="PostContent"><?php echo $LastPost->getContent();?></div>
			<br />
			<span class="AuthorName"><?php echo $LastPost->getAuthor();?>,</span>
			<span class="CreatedAt"><?php echo $LastPost->getCreatedAt()->format('d/m/Y');?></span>
			<a href="<?php echo HOST.'post/id/'.$LastPost->getId()?>">Test</a>	
		</div>
</div>
    

