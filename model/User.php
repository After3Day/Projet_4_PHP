<?php

// Setters & Getters pour un utilisateur  passwordVerify -> Verifie les mots de passe encodés // et passwordHash -> encode le mot de passe

class User {
	private $id;
	private $name;
	private $surname;
	private $pseudo;
	private $email;
	private $password;
	private $role;
	private $birthday;
    private $errorsPseudo;
    private $errorsMail;

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);

            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * @param mixed $surname
     *
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param mixed $pseudo
     *
     * @return self
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }


    /**
     * @return mixed
     */
    public function getErrorsPseudo()
    {
        return $this->errorsPseudo;
    }

    /**
     * @param mixed $errorsPseudo
     *
     * @return self
     */
    public function setErrorsPseudo($errorsPseudo)
    {
        $this->errorsPseudo = $errorsPseudo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrorsMail()
    {
        return $this->errorsMail;
    }

    /**
     * @param mixed $errorsMail
     *
     * @return self
     */
    public function setErrorsMail($errorsMail)
    {
        $this->errorsMail = $errorsMail;

        return $this;
    }
}