<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/library/db.php');
class Model_Article {
	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	public function listArticle() 
	{
		$query = "SELECT * FROM users;";
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function loadArticle()
	{
		return "chargement de l'article ".$id;
	}
}
?>