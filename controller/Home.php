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

		$this->render('post', array('SPost' => $SPost));
	
	}
	/*
	public function showComments()
	{
		Afficher tous les commentaires relatifs à un post.
	}
*/
	public function showRegistration()
	{
		$this->render('register');
	}
	

	public function showLogin()
	{
		
		$this->render('login');
	}

}
