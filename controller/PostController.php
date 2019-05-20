<?php

class PostController extends View
{
	
	public function editArticle($request) {

		if($this->userSession->hasNotRole('admin')) $this->redirect();

		$id = $request->get('id');
		
		$manager = new PostManager();
		$article = $manager->findPost($id);
				
		$this->render('edit', array('article' => $article));
	}

	public function createArticle($request) {

		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$name = $request->get('title');
		$content = $request->get('content');
		$author = $request->get('author');

		$manager = new PostManager();
		$manager->newPost($name, $content, $author);
		
		$this->redirect('index');

	}

	public function updateArticle($request) {

		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$id = $request->get('id');
		$title = $request->get('title');
		$content = $request->get('content');
		$author = $request->get('author');

		$manager = new PostManager();

		$manager->updatePost($id, $title, $content, $author);
		
	}

	public function deleteArticle($request) {

		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$id = $request->get('id');

		$manager = new PostManager();
		$manager->deletePost($id);

		$this->redirect('home');
	}
}