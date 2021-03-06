<?php

class AuthController extends View
{
	
	public function signin($request)
	{
		$manager = new UserManager();

		$pseudo = $request->get('pseudo');
		$password = $request->get('password');

		$user = $manager->login($pseudo, $password);

		if(isset($user) && password_verify($password, $user->getPassword())) {

			$userSession = new UserSession();
			$userSession->setPseudo($pseudo);
			$userSession->setRole($user->getRole());
			$this->redirect('home');
		}
		$user->setErrorsPseudo('Mot de passe ou pseudo incorrect !');
		$this->render('login', array('user' => $user));
	}

	public function signout()
	{
		session_unset();
		header('Location:index');
	}

	public function IsValid($request)
	{
		if($this->userSession->isLogged()) $this->redirect('home');

		$pseudo 	= $request->get('pseudo');
		$password 	= $request->get('password');
		$confirm 	= $request->get('confirm');
		$name 		= $request->get('name');
		$surname 	= $request->get('surname');
		$email 		= $request->get('email');


		$manager = new UserManager();
		$user = $manager->verify($pseudo, $email);

		$manager2 = new ErrorsManager();
		$errors = $manager2->verifyReg($pseudo, $password, $confirm, $name, $surname, $email);

		$erp = $user->getErrorsPseudo();
		$erm = $user->getErrorsMail();
		$errs = $errors->getClean();

		

		if(isset($erm) || isset($erp) || isset($errs)){
			$user->setPseudo($pseudo);
			$user->setName($name);
			$user->setSurname($surname);
			$user->setEmail($email);
			$this->render('register', array('errors' => $errors, 'user' => $user));
		} else {
			$manager->register($pseudo, $password, $name, $surname, $email);
			$this->redirect('home');
		}

	}

}
