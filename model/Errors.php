<?php

class Errors {

	private $ErrPseudo;
	private $ErrPass;
	private $ErrConf;
	private $ErrName;
	private $ErrSurname;
	private $ErrEmail;
	private $Clean;

    /**
     * @return mixed
     */
    public function getErrPseudo()
    {
        return $this->ErrPseudo;
    }

    /**
     * @param mixed $ErrPseudo
     *
     * @return self
     */
    public function setErrPseudo($ErrPseudo)
    {
        $this->ErrPseudo = $ErrPseudo;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrPass()
    {
        return $this->ErrPass;
    }

    /**
     * @param mixed $ErrPass
     *
     * @return self
     */
    public function setErrPass($ErrPass)
    {
        $this->ErrPass = $ErrPass;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrConf()
    {
        return $this->ErrConf;
    }

    /**
     * @param mixed $ErrConf
     *
     * @return self
     */
    public function setErrConf($ErrConf)
    {
        $this->ErrConf = $ErrConf;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrName()
    {
        return $this->ErrName;
    }

    /**
     * @param mixed $ErrName
     *
     * @return self
     */
    public function setErrName($ErrName)
    {
        $this->ErrName = $ErrName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrSurname()
    {
        return $this->ErrSurname;
    }

    /**
     * @param mixed $ErrSurname
     *
     * @return self
     */
    public function setErrSurname($ErrSurname)
    {
        $this->ErrSurname = $ErrSurname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getErrEmail()
    {
        return $this->ErrEmail;
    }

    /**
     * @param mixed $ErrEmail
     *
     * @return self
     */
    public function setErrEmail($ErrEmail)
    {
        $this->ErrEmail = $ErrEmail;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClean()
    {
        return $this->Clean;
    }

    /**
     * @param mixed $Clean
     *
     * @return self
     */
    public function setClean($Clean)
    {
        $this->Clean = $Clean;

        return $this;
    }
}