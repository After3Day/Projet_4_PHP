<?php

class AuthController extends View
{
	
	public function signin($request)
	{
		
		//if(!$request->hasArea('admin')) $this->redirecti('403');

		$manager = new UserManager();

		$manager->login($_POST['pseudo'], $_POST['password']);
	}

	public function signout()
	{
		session_unset();
		header('Location:index');
	}

	public function IsValid()
	{
		$manager = new UserManager();

		$manager->register($_POST);			
	}

}
