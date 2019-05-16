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

			$Comment = new Comment();

			$Comment->hydrate($row);
			
			$Comments[] = $Comment;
		};

		return $Comments;

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

	public function updateComment($id, $content)
	{
		$dbh = $this->dbh;

		$query = "UPDATE comments
					SET content = :content
					WHERE id = :id";

		$req = $dbh->prepare($query);
		$req->bindParam('id', $id , PDO::PARAM_INT);
		$req->bindParam('content', $content, PDO::PARAM_STR);
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