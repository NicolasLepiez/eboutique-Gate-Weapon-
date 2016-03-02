<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/library/db.php');

class Model_Recherche {

	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}


	/**
	 * Fonction permettant la recherche d'objet même en entrant qu'une partie du nom de l'objet
	 */
	public function getID($recherche) 
	{
		$query = 'SELECT id_article FROM articles WHERE nom LIKE "%'.$recherche.'%";';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	
}