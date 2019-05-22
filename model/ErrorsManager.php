<?php

class ErrorsManager extends Manager {

	public  function verifyReg($pseudo, $password, $confirm, $name, $surname, $email){

		$errors = new Errors();

		if (!preg_match(" ^[a-zA-Z0-9_]{4,16}$^ ", $pseudo)) {

			$errors->setErrPseudo("Le pseudo n'est pas valide.");
			$errors->setClean('x');
		}
		if (!preg_match(" ^[a-zA-Z_]{4,16}$^ ", $name)) {

			$errors->setErrName('Le nom ne peut contenir que des lettres.');
			$errors->setClean('x');
		}
		if (!preg_match(" ^[a-zA-Z_]{4,16}$^ ", $surname)) {

			$errors->setErrSurname('Le prénom ne peut contenir que des lettres.');
			$errors->setClean('x');
		}
		if (!preg_match(" ^[a-zA-Z0-9_]{5,16}$^ ", $password)) {

			$errors->setErrPass("Le mot de passe n'est pas valide.");
			$errors->setClean('x');
		}
		if($password != $confirm) {
			$errors->setErrConf('Ne correspond pas au mot de passe.');
			$errors->setClean('x');
		}
		if (!preg_match(" #^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$# ", $email)) {
			$errors->setErrEmail("L'adresse email n'est pas valide.");
			$errors->setClean('x');
		}

		return $errors;
	}

	public function getEntityName(){}
}