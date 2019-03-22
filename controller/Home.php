<?php

/* Class Home -> Show  Homepage
*/

class Home
{
	public function showHome()
	{

		$manager = new PostManager();
		$LastPost = $manager->findLastPost();

		$myView = new View('home');
		$myView->render(array('LastPost' => $LastPost));
		
	}

	public function showPosts()
	{

		$manager = new PostManager();
		$Posts = $manager->findPosts();

		$myView = new View('posts');
		$myView->render(array('Posts' => $Posts));
		
	}

	/*public function showPost()
	{

	}

	public function showComments()
	{

	}*/
}
