<?php

class UserSession
{
	
	public function __construct()
    {
		if(!isset($_SESSION['userSession'])) {
			$_SESSION['userSession']['pseudo'] = null;
			$_SESSION['userSession']['role'] = null;
		}
		$this->hydrate($_SESSION['userSession']);
	}
	
	public function hydrate($datas) {
		$userSession = $_SESSION['userSession'];
		
		$this->setPseudo($userSession['pseudo']);
		$this->setRole($userSession['role']);
	}

    public function isLogged()
    {
        if($_SESSION['userSession']['role'] != '')
        {
            return true;
        } else {
            return false;
        }
    }

    public function hasRole($role)
    {
        $role = $_SESSION['userSession']['role'];

        if($role != 'admin')
        {
            return false;
        } else {
            return true;
        }
    }

    //public function 

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $_SESSION['userSession']['pseudo'];
    }

    /**
     * @param mixed $pseudo
     *
     * @return self
     */
    public function setPseudo($pseudo)
    {
        $_SESSION['userSession']['pseudo'] = $pseudo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $_SESSION['userSession']['role'];
    }

    /**
     * @param mixed $role
     *
     * @return self
     */
    public function setRole($role)
    {
        $_SESSION['userSession']['role'] = $role;

        return $this;
    }
}