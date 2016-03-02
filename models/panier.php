<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/library/db.php');
class Model_Panier {
	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	/**
	 * Fonction permettant de modifier la quantite d'un objet en fonction de la quantite achetée
	 */

	public function updateQuantity($newQuantity, $id)
	{
		$query = 'UPDATE articles SET quantite = :quantite WHERE id_article = '.$id;
		$table = array (
			'quantite' => $newQuantity
			);
		$this->db->execute($query,$table);

	}

	/**
	 * Fonction permettant de lister les articles du panier
	 */
	public function listArticlePanier($precision) 
	{
		$query = 'SELECT * FROM articles'.$precision.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}
}