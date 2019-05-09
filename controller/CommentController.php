<?php

class CommentController extends View {

	public function editComment($request)
	{
		if($this->userSession->hasNotRole('admin'))  $this->redirect();

		$id = $request->get('id');

		//new Manager		
	}

	public function createComment()
	{
		if($this->userSession->hasNotRole('user'))  $this->redirect();


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