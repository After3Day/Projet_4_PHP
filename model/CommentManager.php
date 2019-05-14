<?php

class CommentManager extends Manager {


	public function getComment($postId) {

		$dbh = $this->dbh;

		$query = "SELECT * FROM comments
					WHERE postId = :id";

		$req  = $dbh->prepare($query);
		$req->bindParam('id', $postId , PDO::PARAM_INT);
		$req->execute();

		$row = $req->fetch(PDO::FETCH_ASSOC);

		$Comment = new Comment($row);

		return $Comment;

	}

	public function newComment($pseudo, $content, $postId)
	{
		$dbh = $this->dbh;

		$query = "INSERT INTO comments(pseudo, content, postId, createdAt)
					VALUES (:pseudo, :content, :postId, NOW())";

		$req = $dbh->prepare($query);

		$req->bindParam('pseudo', $pseudo);
		$req->bindParam('content', $content);
		$req->bindParam('postId', $postId);

		$req->execute();

	}

	public function getEntityName(){}
	
}