<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/models/commentaire.php'); 	
class Controller_Commentaire {

	public function listComment($id)
	{
		$comment = new Model_Commentaire();
		$listComment = $comment->getComment($id);
		//var_dump($listComment);
		return $listComment;
	}

	public function addComment($id)
	{
		if (isset($_POST['comment']) && isset($_SESSION['id_users']) && !empty($_POST['commentaire'])) {
			$commentaire = $_POST['commentaire'];
			$titre = $_POST['title'];
			$new = new Model_Commentaire();
			$newComment = $new->newComment($commentaire, $id, $titre);
		} else {
			$error = 'Vous devez être connecté pour commenter !';
		}
	}

}