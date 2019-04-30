<?php

class PostController extends View
{
	
	public function editArticle($request) {
		
		$role = $this->userSession->getRole();
		
		if($role === 'admin'){

			$id = $request->get('id');
			$manager = new PostManager();
			$article = $manager->findPost($id);
				
			$this->render('edit');
		} else {
			echo '403';	
		}
	}

	public function createArticle() {

		$role = $this->userSession->getRole();

		if($role === 'admin')
		{

			$this->render('edit');
				
		} else {
			echo '403';	
		} 

	}
	
}