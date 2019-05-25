<?php

class CommentController extends View {


	public function editComment($request)
	{
		if($this->userSession->hasNotRole('user') && $this->userSession->hasNotRole('admin'))  $this->redirect('home');

		$id = $request->get('id');
		$postId = $request->get('postId');

		$manager = new CommentManager();
		$CommentS = $manager->getComment($id);
		$pseudo = $this->userSession->getPseudo();

		if($pseudo != $CommentS->getPseudo() && $this->userSession->hasNotRole('admin')) $this->redirect('403');

		$this->render('editCom', array('CommentS' => $CommentS));
	}

	public function updateCom($request)
	{
		if($this->userSession->hasNotRole('user') && $this->userSession->hasNotRole('admin'))  $this->redirect('connect');

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
		if(!$this->userSession->isLogged())  $this->redirect('connect');

		$pseudo = $this->userSession->getPseudo();
		$content = $request->get('content');
		$postId = $request->get('id');

		$manager = new CommentManager();
		$manager->newComment($pseudo, $content, $postId);
		
		$this->redirect('post/id/'.''.$postId);
	}

	public function deleteComment($request)
	{
		if(!$this->userSession->isLogged())  $this->redirect('connect');

		$id = $request->get('id');
		$postId = $request->get('postId');

		$manager = new CommentManager();
		$CommentS = $manager->getComment($id);
		$pseudo = $this->userSession->getPseudo();

		if($pseudo != $CommentS->getPseudo() && $this->userSession->hasNotRole('admin')) $this->redirect('403');
		
		$manager->deleteComment($id);		

		$this->redirect('post/id/'.''.$postId);
	}

	public function reportCom($request)
	{
		if(!$this->userSession->isLogged())  $this->redirect('connect');

		$id = $request->get('id');
		$postId = $request->get('postId');

		$manager = new CommentManager();
		$manager->reportCom($id);
		$CommentS = $manager->getComment($id);

		$this->redirect('post/id/'.''.$postId);	
	}

}