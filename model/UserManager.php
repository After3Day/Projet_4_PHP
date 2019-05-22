<?php

// Manager user -> Verif connexion et insert new user dans dbh


class UserManager extends Manager
{

	public function register($values)
	{
		$dbh = $this->dbh;

		$password = password_hash($values['password'], PASSWORD_DEFAULT);

		$query = "INSERT INTO users(name, surname, pseudo, email, password, role) 
					VALUES(:name, :surname, :pseudo, :email, :password, :role)";
					
		$req  = $dbh->prepare($query);

		$req->execute(array(
			'name' => $values['name'],
			'surname' => $values['surname'],
			'pseudo' => $values['pseudo'],
			'email' => $values['email'],
			'password' => $password,
			'role' => 'user',
			));

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

		if($data != ''){

			$user->hydrate($data);
		}

		return $user;

			
	}

	public function verify($pseudo, $email) {

		$dbh = $this->dbh;

		$query = "SELECT *
					FROM users 
					WHERE pseudo = :pseudo
					OR email = :email";
		
		$req = $dbh->prepare($query);
		$req->bindParam('pseudo', $pseudo, PDO::PARAM_STR);
		$req->bindParam('email', $email, PDO::PARAM_STR);
		$req->execute();

		$data = $req->fetch(PDO::FETCH_ASSOC);
		
		$user = new User();
		
		if($data != '') {
			$user->hydrate($data);
			if($user->getPseudo() === $pseudo) $user->setErrorsPseudo("Le pseudo déjà utilisé.");
			if($user->getEmail() === $email) $user->setErrorsMail("L'email déjà utilisé");
		}

		return $user;
	}

	public function getEntityName(){}
}