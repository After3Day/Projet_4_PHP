<?php

class AuthController extends View
{
	
	public function signin($request)
	{
		$manager = new UserManager();

		$pseudo = $request->get('pseudo');
		$password = $request->get('password');

		$manager->login($pseudo, $password);
	}

	public function signout()
	{
		session_unset();
		header('Location:index');
	}

	public function IsValid($request)
	{
		$manager = new UserManager();

		$manager->register($_POST);			
	}

}
