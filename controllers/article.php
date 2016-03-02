<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/models/article.php'); 	
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/utilisateur.php');
class Controller_Article {
	/**
	 * Fonction permettant de lister les articles
	 */

	public function listArticle() 
	{
		$precision = '';
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/articles/list.php';
		
	}

	/**
	 * Fonction permettant de lister les articles pour le panier
	 */

	public function listArticlePanier($id) 
	{
		$precision = ' WHERE id_article ='.$id;
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		return $listArticle;
		
	}

	/**
	 * Fonction permettant de lister les articles pour la page home
	 */

	public function listArticleHome() 
	{
		$precision = ' ORDER BY id_article DESC';
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/home.php';
		
	}

	/**
	 * Fonction permettant de lister les articles pour l'administrateur
	 */

	public function listArticleAdmin() 
	{
		$article = new Model_Article();
		$listArticle = $article->listArticleAdmin();
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/liste_article.php';
		
	}

	/**
	 * Fonction permettant de lister les articles par licence
	 */


	public function listArticleByLicence() 
	{
		$precision = ' WHERE id_licence ='.$_GET['id'];
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/articles/list_licence.php';
		
	}

	/**
	 * Fonction permettant de lister les articles par catégorie
	 */


	public function listArticleByCategorie() 
	{
		$precision = ' WHERE id_categorie ='.$_GET['id'];
		//var_dump($precision);
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/articles/list_categorie.php';
		
	}

	/**
	 * Fonction permettant de lister les licences
	 */

	public function listLicence()
	{
		$licences = new Model_Article();
		$listLicence = $licences->getListLicence();
		//var_dump($listLicence);
		return $listLicence;
	}

	/**
	 * Fonction permettant de lister les catégories
	 */

	public function listCategorie()
	{
		$categories = new Model_Article();
		$listCategorie = $categories->getListCategorie();
		//var_dump($listLicence);
		return $listCategorie;
	}

	/**
	 * Fonction permettant de lister les sous catégories
	 */

	public function listSousCategorie()
	{
		$sous_categories = new Model_Article();
		$listSousCategorie = $sous_categories->getAllListSousCategorie();
		//var_dump($listLicence);
		return $listSousCategorie;
	}

	/**
	 * Fonction permettant de voir un articles en particulier
	 */


	public function viewArticle($id) 
	{
		$article = new Model_Article();
		$articleDetails = $article->loadArticle($id);
		//var_dump($articleDetails);
		require_once($_SERVER['DOCUMENT_ROOT'].'boutique/views/articles/view.php');
	}

	/**
	 * Fonction permettant d'ajouter des articles
	 */

	public function addArticle()
	{
		if (empty($_POST)) {
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/ajout_article.php';
		} else {
			$nom = htmlspecialchars($_POST['name']);
			$imageURL = htmlspecialchars($_POST['imageURL']);
			$description = htmlspecialchars($_POST['description']);
			$prix = htmlspecialchars($_POST['price']);
			$quantite = htmlspecialchars($_POST['quantity']);
			$id_licence = htmlspecialchars($_POST['licence']);
			$id_categorie = htmlspecialchars($_POST['categorie']);
			$id_sous_categorie = htmlspecialchars($_POST['sous_categorie']);

			$article = new Model_Article();
			$new_article = $article->ajoutArticle($nom, $imageURL, $description, $prix, $quantite, $id_licence, $id_categorie, $id_sous_categorie);
			$message = 'Nouvel article ajouté !';
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/ajout_article.php';
		}
	}

	/**
	 * Fonction permettant de supprimer dans articles
	 */

	public function suppArticle()
	{
		$supp = new Model_Article();
		$suppression = $supp->suppArticle();
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/article_sup.php';
	}

	/**
	 * Fonction permettant de modifier les articles
	 */

	public function changeArticle()
	{
		if(empty($_POST)) {
			require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/admin/views/modif_article.php';
		} else {
			$imageURL = htmlspecialchars($_POST['imageURL']);
			$nom = htmlspecialchars($_POST['name']);
			$description = htmlspecialchars($_POST['description']);
			$prix = htmlspecialchars($_POST['price']);
			$quantite = htmlspecialchars($_POST['quantity']);
			$licence = htmlspecialchars($_POST['licence']);
			$categorie = htmlspecialchars($_POST['categorie']);
			$sous_categorie = htmlspecialchars($_POST['sous_categorie']);

			$article_info = new Model_Article();
			$article_check = $article_info->getInfo();

			if (empty($imageURL)) {
				$imageURL = $article_check[0]['imageURL'];
			}

			if (empty($nom)) {
				$nom = $article_check[0]['nom'];
			}
			if (empty($description)) {
				$description = $article_check[0]['description'];
			}
			if (empty($prix)) {
				$prix = $article_check[0]['prix'];
			}
			if (empty($quantite)) {
				$quantite = $article_check[0]['quantite'];
			}
			if (empty($licence)) {
				$licence = $article_check[0]['id_licence'];
			}
			if (empty($categorie)) {
				$categorie = $article_check[0]['id_categorie'];
			}
			if (empty($sous_categorie)) {
				$sous_categorie = $article_check[0]['id_sous_categorie'];
			}

			$articleChange = new Model_Article();
			$article = $articleChange->changeInfo($imageURL, $nom, $description, $prix, $quantite, $licence, $categorie, $sous_categorie);
			//require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/profil_reussite.php';
		}
	}
}
