<?php

class PostController extends View
{
	
	public function editArticle($request) {

		if($this->userSession->hasNotRole('admin')) $this->redirect('403');

		$id = $request->get('id');
		
		$manager = new PostManager();
		$article = $manager->findPost($id);
				
		$this->render('edit', array('article' => $article));
	}

	public function createArticle($request) {

		if($this->userSession->hasNotRole('admin'))  $this->redirect('403');

		$name = $request->get('title');
		$content = $request->get('content');
		$author = $this->userSession->getPseudo();

		$manager = new PostManager();
		$manager->newPost($name, $content, $author);
		
		$this->redirect('index');

	}

	public function updateArticle($request) {

		if($this->userSession->hasNotRole('admin'))  $this->redirect('403');

		$id = $request->get('id');
		$title = $request->get('title');
		$content = $request->get('content');
		$author = $this->userSession->getPseudo();

		$manager = new PostManager();

		$manager->updatePost($id, $title, $content, $author);

		$this->redirect('posts');
		
	}

	public function deleteArticle($request) {

		if($this->userSession->hasNotRole('admin'))  $this->redirect('403');

		$id = $request->get('id');

		$manager2 = new CommentManager();
		$manager2->deleteViaPost($id);
		
		$manager = new PostManager();
		$manager->deletePost($id);

		

		$this->redirect('posts');
	}
}