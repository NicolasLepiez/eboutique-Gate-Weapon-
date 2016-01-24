<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/library/db.php');
class Model_Categorie {
	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	public function addCategorieLicence($precision, $nom, $imageURL)
	{
		$query = 'INSERT INTO '.$precision.'(imageURL, nom) VALUES (:imageURL, :nom);';
		$table = array (
			'nom' => $nom
			);
		$this->db->execute($query, $table);
	}

	public function AddSousCategorie($nom, $categorie)
	{
		$query = 'INSERT INTO sous_categories (nom, id_categorie) VALUES (:nom, :id_categorie);';
		$table = array (
			'nom' => $nom,
			'id_categorie' => $categorie
			);
		$this->db->execute($query, $table);
	}

}