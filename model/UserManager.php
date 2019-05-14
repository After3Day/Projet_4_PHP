<?php

// Manager user -> Verif connexion et insert new user dans dbh


class UserManager extends Manager
{

	public function register($values)
	{
		$dbh = $this->dbh;

		$password = password_hash($values['password'], PASSWORD_DEFAULT);

		$query = "INSERT INTO users(name, surname, pseudo, email, password, role, birthday) 
					VALUES(:name, :surname, :pseudo, :email, :password, :role, :birthday)";
					
		$req  = $dbh->prepare($query);

		$req->execute(array(
			'name' => $values['name'],
			'surname' => $values['surname'],
			'pseudo' => $values['pseudo'],
			'email' => $values['email'],
			'password' => $password,
			'role' => $values['role'],
			'birthday' => $values['birthday']
			));

		//verify($values);

		header('Location:index.php');
	}

	public function login($pseudo, $password)
	{
		$dbh = $this->dbh;

		$query = "SELECT pseudo, password, role
					FROM users 
					WHERE pseudo = :pseudo";
		
		$req = $dbh->prepare($query);
		$req->bindParam('pseudo', $pseudo, PDO::PARAM_STR);
		$req->execute();

		$data = $req->fetch(PDO::FETCH_ASSOC);

		$user = new User();

		$user->hydrate($data);

		if(password_verify($password, $user->getPassword())) {
			$userSession = new UserSession();
			$userSession->setPseudo($pseudo);
			$userSession->setRole($user->getRole());
		}
		header('Location:index');
	}

	/*public function verify($values) {

		$errors = array();

		$pseudo 	= $values['pseudo'];
		$name 		= $values['name'];
		$surname 	= $values['surname'];
		$email 		= $values['email'];
		$birthday 	= $values['birthday'];


		if(isset($values)) {
			if (empty($pseudo)) {
				# code...
			} else if (!preg_match("/^[a-zA-Z]*$/",$pseudo)) {
				$errors['name'] = 'Le nom ne peut contenir que des lettres.'
			}
		}
	}*/

	public function getEntityName(){}
}