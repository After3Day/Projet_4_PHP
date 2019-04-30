<?php

class PostController extends View
{
	
	public function editArticle($request) {

		
		if($this->userSession->hasNotRole('admin')) $this->redirect(); // verif pas le role;

		$id = $request->get('id');
		$manager = new PostManager();
		$article = $manager->findPost($id);
				
		$this->render('edit');
	}

	public function createArticle() {

		if($this->userSession->hasNotRole('admin'))  $this->redirect();
		
		$this->render('edit');

	}
	
}