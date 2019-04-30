<div class="container">
	<div class="post">
		<h3><?php echo $SPost->getName();?></h3>
		<br />
		<div class="PostContent"><?php echo $SPost->getContent();?></div>
		<br />
		<span class="AuthorName"><?php echo $SPost->getAuthor();?>,</span>
		<span class="CreatedAt"><?php echo $SPost->getCreatedAt()->format('d/m/Y');?></span>
		
	</div>
</div>