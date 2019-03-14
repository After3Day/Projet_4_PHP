
<div id="container">
	<h2>Mon dernier Post</h2>
		<div class="post">
			<h3><?php echo $LastPost->getName();?></h3>
			<br />
			<div class="PostContent"><?php echo $LastPost->getContent();?></div>
			<br />
			<span class="AuthorName"><?php echo $LastPost->getAuthor();?></span>
			<span class="CreatedAt"><?php echo $LastPost->getCreatedAt();?></span>			
		</div>
</div>
    

