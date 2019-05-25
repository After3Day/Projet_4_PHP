<?php if(isset($article)) {

	$title = $article->getName();
	$content = $article->getContent();
	$id = '/id/'.$article->getId();

	$action = 'update';
} else {
	$title = 'Titre';
	$content = '';
	$id = '';
	$action = 'create';
}
?>

<div class="regular-page-wrap ">
	<div class="container container2">
		<div class="row justify-content-center">
			<div class="col-md-12 col-lg-12">
				<div class="contact-form">
					<h5>Éditeur</h5>
					<form method="post" action="<?php echo HOST.''.$action.''.$id;?>">
						<fieldset>	
						<div class="group">
                            <input type="text" name="name" id="name" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label><?php echo $title;?></label>
                        </div>
                        <div class="group">
                        	<textarea name="content" type="text" id="content" style="height: 500px;"><?php echo $content;?></textarea><br />
							<span class="help-block" id="ErrNew" style="color:red;"></span>
                        </div>
							
						</fieldset>
						<button  id="SubBut" class="btn btn-primary" type="submit" value="" >Soumettre</button>						
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
