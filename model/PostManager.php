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

		$query = "SELECT * FROM posts ORDER BY created_at DESC LIMIT 0, 1";

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

	public function findPosts()
	{
		$dbh = $this->dbh;;

		$query = "SELECT * FROM posts";

		$req  = $dbh->prepare($query);
		$req->execute();

		while ($row = $req->fetch(PDO::FETCH_ASSOC)) {

			$post = new Post();

			$post->setId($row['id']);
			$post->setName($row['name']);
			$post->setContent($row['content']);
			$post->setAuthor($row['author']);
			$post->setCreatedAt($row['created_at']);
			
			$Posts[] = $post;
		};

		return $Posts;
	}
}