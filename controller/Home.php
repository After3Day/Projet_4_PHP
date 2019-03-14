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
		$myView->render($LastPost);
		
	}

	/*public function showPost()
	{

	}

	public function showComments()
	{

	}*/
}
