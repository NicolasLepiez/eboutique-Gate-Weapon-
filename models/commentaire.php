<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/library/db.php');
class Model_Commentaire {
	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	/**
	 * Fonction permettant de récupérer les commentaires
	 */
	public function getComment($id)
	{
		$query = 'SELECT commentaire.titre_commentaire, commentaire.commentaire, users.pseudo, users.image_profil FROM commentaire INNER JOIN users ON commentaire.id_users = users.id_users INNER JOIN articles ON commentaire.id_article = articles.id_article WHERE commentaire.id_article = '.$id;
		$resultat = $this->db->get($query);
		return $resultat;
	}

	/**
	 * Fonction permettant d'ajouter un nouveau commentaire
	 */

	public function newComment($commentaire, $id, $titre)
	{
		$query = 'INSERT INTO commentaire (titre_commentaire, commentaire, id_article, id_users) VALUES (:titre_commentaire, :commentaire, :id_article, :id_users)';
		$table = array (
			'titre_commentaire' => $titre,
			'commentaire' => $commentaire,
			'id_article' => $id,
			'id_users' => $_SESSION['id_users']
			);
		$resultat = $this->db->execute($query, $table);
		return $resultat;
	}

}