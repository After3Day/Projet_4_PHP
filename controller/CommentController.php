<?php

class CommentController extends View {

	public function editComment($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$id = $request->get('id');
		$postId = $request->get('postId');

		$manager = new CommentManager();
		$CommentS = $manager->getComment($id);
		$pseudo = $this->userSession->getPseudo();

		if($pseudo != $CommentS->getPseudo()) $this->redirect('home');

		$this->render('editCom', array('CommentS' => $CommentS));
	}

	public function updateCom($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$id = $request->get('id');
		$postId = $request->get('postId');
		$content = $request->get('content');
		$pseudo = $this->userSession->getPseudo();

		$manager = new CommentManager();
		$manager->updateComment($id, $content, $postId, $pseudo);

		$this->redirect('post/id/'.''.$postId);
	}

	public function createComment($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$pseudo = $this->userSession->getPseudo();
		$content = $request->get('content2');
		$postId = $request->get('id');

		$manager = new CommentManager();
		$manager->newComment($pseudo, $content, $postId);
		$Comments = $manager->getComments($postId);

		$this->render('', array('Comments' => $Comments));
		$this->redirect('post/id/'.''.$postId);
	}

	public function deleteComment($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$id = $request->get('id');
		$postId = $request->get('postId');

		$manager = new CommentManager();
		$CommentS = $manager->getComment($id);
		$pseudo = $this->userSession->getPseudo();

		if($pseudo != $CommentS->getPseudo()) $this->redirect('home');
		
		$manager->deleteComment($id);		

		$this->redirect('post/id/'.''.$postId);
	}

	public function reportComment($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$id = $request->get('id');
		$rating = $request->get('rating');

		//$this->redirect('post/id/'.''.$postId);		
	}

}