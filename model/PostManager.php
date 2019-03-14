<?php

class PostManager
{

	private $dbh;


	public function __construct()
	{
		$this->dbh = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME.";", DB_USERNAME, DB_PASSWORD);
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
			$LastPost->setName($row['name']);
			$LastPost->setContent($row['content']);
			$LastPost->setAuthor($row['author']);
			$LastPost->setCreatedAt($row['created_at']);
			
		};

		return $LastPost;

	}
}