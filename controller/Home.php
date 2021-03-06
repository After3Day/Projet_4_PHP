<?php


class Home extends View
{

	public function showHome()
	{

		$manager = new PostManager();
		$LastPost = $manager->findLastPost();

		$this->render('home', array('LastPost' => $LastPost));
		
	}

	public function showPosts()
	{
		$manager = new PostManager();
		$Posts = $manager->findPosts();

		$this->render('posts', array('Posts' => $Posts));
	
	}

	public function showPost($request)
	{
		$id = $request->get('id');
		$manager = new PostManager();
		$SPost = $manager->findPost($id);

		$manager2 = new CommentManager();
		$Comments = $manager2->getComments($id);

		$this->render('post', array('SPost' => $SPost, 'Comments' => $Comments));
	
	}
	
	public function showComments($request)
	{
		$postId = $request->get('id');

		$manager = new CommentManager();
		$Comments = $manager->getComments($postId);

		$this->render('comments', array('Comments' => $Comments));
	}

	public function showRegistration()
	{
		$this->render('register');
	}
	

	public function showLogin()
	{
		
		$this->render('login');
	}

	public function showEditForm()
	{
		$this->render('edit');
	}

	public function showConnect()
	{
		$this->render('connected');
	}

	public function show403()
	{
		$this->render('403');
	}

	public function show404()
	{
		$this->render('404');
	}

}
