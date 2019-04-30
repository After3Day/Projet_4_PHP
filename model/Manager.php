<?php

abstract class Manager
{

	protected $dbh;

	public function __construct()
	{
		$this->dbh = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF8', DB_USERNAME, DB_PASSWORD);
	}

	public abstract function getEntityName();

}