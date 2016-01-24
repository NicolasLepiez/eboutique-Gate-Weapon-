<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/library/db.php');
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

	public function listArticleAdmin() 
	{
		$query = 'SELECT articles.id_article, articles.nom, articles.imageURL, articles.description, articles.prix, articles.quantite, licences.nom, categories.nom, sous_categories.nom 
				  FROM `articles` INNER JOIN licences ON articles.id_licence = licences.id_licence 
				  INNER JOIN categories ON articles.id_categorie = categories.id_categorie 
				  INNER JOIN sous_categories ON articles.id_sous_categorie = sous_categories.id_sous_categorie;';
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

	public function getAllListSousCategorie()
	{
		$query = 'SELECT * FROM sous_categories';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function getListSousCategorie($precision)
	{
		$query = 'SELECT * FROM sous_categories WHERE id_categorie = '.$precision.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function loadArticle($id)
	{
		$query = 'SELECT articles.nom, articles.imageURL, articles.description, articles.prix, articles.quantite, licences.nom, categories.nom, sous_categories.nom 
				  FROM `articles` INNER JOIN licences ON articles.id_licence = licences.id_licence 
				  INNER JOIN categories ON articles.id_categorie = categories.id_categorie 
				  INNER JOIN sous_categories ON articles.id_sous_categorie = sous_categories.id_sous_categorie 
				  WHERE id_article='.$id.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function ajoutArticle($nom, $imageURL, $description, $prix, $quantite, $id_licence, $id_categorie, $id_sous_categorie)
	{
		$query = 'INSERT INTO articles (nom, imageURL, description, prix, quantite, id_licence, id_categorie, id_sous_categorie) VALUES (:nom, :imageURL, :description, :prix, :quantite, :id_licence, :id_categorie, :id_sous_categorie);';
		$table = array (
				'nom' => $nom,
				'imageURL' => $imageURL,
				'description' => $description,
				'prix' => $prix,
				'quantite' => $quantite,
				'id_licence' => $id_licence,
				'id_categorie' => $id_categorie,
				'id_sous_categorie' => $id_sous_categorie
			);
		$this->db->execute($query, $table);
	}

	public function getInfo()
	{
		$query = 'SELECT * FROM articles WHERE id_article ='.$_GET['id'].';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function changeInfo($imageURL, $nom, $description, $prix, $quantite, $licence, $categorie, $sous_categorie)
	{
		$query = 'UPDATE articles SET imageURL = :imageURL, nom = :nom, description = :description, prix = :prix, quantite = :quantite, id_licence = :licence, id_categorie = :categorie, id_sous_categorie = :sous_categorie WHERE id_article ='.$_GET['id'].';';
		$table = array (
				'imageURL' => $imageURL,
				'nom' => $nom,
				'description' => $description,
				'prix' => $prix,
				'quantite' => $quantite,
				'licence' => $licence,
				'categorie' => $categorie,
				'sous_categorie' => $sous_categorie
			);
		$resultat = $this->db->execute($query,$table);
		return $resultat;
	}

	public function suppArticle()
	{
		$query = 'DELETE FROM articles WHERE id_article ='.$_GET['id'].';';
		$table = array();
		$resultat = $this->db->execute($query,$table);
		return $resultat;
	}
}