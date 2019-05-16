<?php

class CommentController extends View {

	public function editComment($request)
	{
		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$id = $request->get('id');
		$content = $request->get('content');
		//$postId = $request->get('id');

		$manager = new CommentManager();
		$manager->updateComment($id, $content);

		//$this->redirect('post/id/'.''.$postId);
		
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
		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$id = $request->get('id');

		$manager = new CommentManager();
		$manager->deleteComment($id);		

		//$this->redirect('post/id/'.''.$postId);
	}

	public function reportComment($request)
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();

		$id = $request->get('id');
		$rating = $request->get('rating');

		//$this->redirect('post/id/'.''.$postId);		
	}

}