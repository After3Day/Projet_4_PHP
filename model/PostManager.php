<?php

class PostManager extends Manager
{


	public function __construct() {
		parent::__construct();
		// modif
	}

	// hydrate
	public function getEntityName()
	{
		return "PostManager";
	}

	public function findLastPost()
	{
		$dbh = $this->dbh;

		$query = "SELECT * FROM posts 
						ORDER BY createdAt 
						DESC LIMIT 0, 1";

		$req  = $dbh->prepare($query);
		$req->execute();

		$row = $req->fetch(PDO::FETCH_ASSOC);

		$LastPost = new Post($row);


		return $LastPost;

	}

	public function findPosts()
	{
		$dbh = $this->dbh;

		$query = "SELECT * FROM posts";

		$req  = $dbh->prepare($query);
		$req->execute();

		while ($row = $req->fetch(PDO::FETCH_ASSOC)) {

			$post = new Post();

			$post->hydrate($row);
			
			$Posts[] = $post;
		};

		return $Posts;
	}

	public function findPost($id)
	{
		$dbh = $this->dbh;

		$query = "SELECT * FROM posts
					WHERE id = :id";

		$req  = $dbh->prepare($query);
		$req->bindParam(':id', $id , PDO::PARAM_INT);
		$req->execute();

		$row = $req->fetch(PDO::FETCH_ASSOC);

		$SPost = new Post($row);

		

		return $SPost;
	}


}