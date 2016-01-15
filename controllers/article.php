<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/article.php');
class Controller_Article {
	/**
	 * Fonction permettant de lister les articles
	 */

	public function listArticle() 
	{
		$precision = '';
		var_dump($precision);
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/articles/list.php';
		
	}


	public function listArticleByLicence() 
	{
		$precision = ' WHERE id_licence ='.$_GET['id'];
		var_dump($precision);
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/articles/list.php';
		
	}


	public function listArticleByCategorie() 
	{
		$precision = ' WHERE id_categorie ='.$_GET['id'];
		//var_dump($precision);
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision);
		require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/articles/list.php';
		
	}


	public function listLicence()
	{
		$licences = new Model_Article();
		$listLicence = $licences->getListLicence();
		//var_dump($listLicence);
		return $listLicence;
	}


	public function listCategorie()
	{
		$categories = new Model_Article();
		$listCategorie = $categories->getListCategorie();
		//var_dump($listLicence);
		return $listCategorie;
	}


	public function viewArticle($id) 
	{
		$article = new Model_Article();
		$articleDetails = $article->loadArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/articles/view.php');
	}
}
