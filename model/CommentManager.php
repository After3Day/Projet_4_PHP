<?php

class CommmentManager extends Manager {

	public function getComment($request) {

		$postId = $request->get('id');

		$dbh = $this->dbh;

		$query = "SELECT * FROM comments
					WHERE id = :id";

		$req  = $dbh->prepare($query);
		$req->bindParam('id', $postId , PDO::PARAM_INT);
		$req->execute();

		$row = $req->fetch(PDO::FETCH_ASSOC);

		$Comment = new Comment($row);

		return $Comment;

	}
	
}