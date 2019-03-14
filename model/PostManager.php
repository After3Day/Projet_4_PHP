<?php

class PostManager
{

	private $dbh;


	public function __construct()
	{
		$host_name = 'db773881273.hosting-data.io';
		$database = 'db773881273';
		$user_name = 'dbo773881273';
		$password = '31ba3E4991_';

		$this->dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
	}


	public function findLastPost()
	{
		$dbh = $this->dbh;;

		$query = "SELECT * FROM Posts ORDER BY created_at DESC LIMIT 0, 1";

		$req  = $dbh->prepare($query);
		$req->execute();

		while ($row = $req->fetch(PDO::FETCH_ASSOC)) {
			$LastPost = new Post();
			$LastPost->setId($row['id']);
			$LastPost->setName(($row['name']);
			$LastPost->setContent(($row['content']);
			$LastPost->setAuthor(($row['author']);
			$LastPost->setCreatedAt(($row['created_at']);
			
		};

		return $LastPost;

	}
}