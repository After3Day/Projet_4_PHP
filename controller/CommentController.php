<?php

class CommentController extends View {

	public function editComment($request)
	{
		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$id = $request->get('id');

		//new Manager		
	}

	public function createComment($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$pseudo = $this->userSession->getPseudo();
		$content = $request->get('content2');
		$postId = $request->get('id');

		$manager = new CommentManager();
		$manager->newComment($pseudo, $content, $postId);

		//$this->render('comment', array('Comment' => $Posts));
		$this->redirect('post/id/'.''.$postId);
	}

	public function deleteComment($request)
	{
		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$id = $request->get('id');

		//new Manager
	}

	public function reportComment($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$id = $request->get('id');

		//new Manager		
	}

}