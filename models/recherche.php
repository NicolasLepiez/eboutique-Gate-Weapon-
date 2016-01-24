<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/library/db.php');

class Model_Recherche {

	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	public function getID($recherche) 
	{
		$query = 'SELECT id_article FROM articles WHERE nom LIKE "%'.$recherche.'%";';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	
}