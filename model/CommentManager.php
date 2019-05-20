<?php

class CommentManager extends Manager {


	public function getComments($postId)
	{
		$dbh = $this->dbh;

		$query = "SELECT * FROM comments
					WHERE postId = :postId
					ORDER BY createdAt 
					DESC";

		$req  = $dbh->prepare($query);
		$req->bindParam('postId', $postId , PDO::PARAM_INT);
		$req->execute();

		while ($row = $req->fetch(PDO::FETCH_ASSOC)) {

			$comment = new Comment();

			$comment->hydrate($row);
			
			$Comments[] = $comment;
		};

		return $Comments;

	}

		public function getComment($id)
	{
		$dbh = $this->dbh;

		$query = "SELECT * FROM comments
					WHERE id = :id";

		$req  = $dbh->prepare($query);
		$req->bindParam('id', $id , PDO::PARAM_INT);
		$req->execute();

		$row = $req->fetch(PDO::FETCH_ASSOC);

		$CommentS = new Comment();

		$CommentS->hydrate($row);

		return $CommentS;

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

	public function updateComment($id, $content, $postId, $pseudo)
	{
		$dbh = $this->dbh;

		$query = "UPDATE comments
					SET content = :content, pseudo = :pseudo, postId = :postId
					WHERE id = :id";

		$req = $dbh->prepare($query);
		$req->bindParam('id', $id , PDO::PARAM_INT);
		$req->bindParam('content', $content, PDO::PARAM_STR);
		$req->bindParam('pseudo', $pseudo, PDO::PARAM_STR);
		$req->bindParam('postId', $postId, PDO::PARAM_INT);
		$req->execute();
	}

	public function deleteComment($id)
	{
		$dbh = $this->dbh;

		$query = "DELETE FROM comments
					WHERE id = :id";
		$req = $dbh->prepare($query);
		$req->bindParam('id', $id , PDO::PARAM_INT);
		$req->execute();		
	}

	public function reportCommment($id, $rating)
	{
		$dbh = $this->dbh;

		$newRating = $rating++;

		$query = "UPDATE comments
					SET rating = :rating
					WHERE id = :id";

		$req = $dbh->prepare($query);
		$req->bindParam('id', $id , PDO::PARAM_INT);
		$req->bindParam('rating', $newRating, PDO::PARAM_INT);
		$req->execute();
	}


	public function getEntityName(){}
	
}