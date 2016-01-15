<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/library/db.php');
class Model_Article {
	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	public function listArticle($precision) 
	{
		$query = 'SELECT * FROM articles'.$precision.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function getListLicence()
	{
		$query = 'SELECT * FROM licences;';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function getListCategorie()
	{
		$query = 'SELECT * FROM categories;';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function loadArticle($id)
	{
		$query = 'SELECT * FROM articles WHERE id_article='.$id.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}
}
