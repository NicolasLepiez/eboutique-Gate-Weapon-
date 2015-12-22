<?php
class Controller_Article {
	/**
	 * Fonction permettant de lister les articles
	 */
	public function listArticle() 
	{
		require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/article.php');
		$article = new Model_Article();
		$listArticle = $article->listArticle();

		require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/articles/list.php');
	}

	public function viewArticle($id) 
	{
		$article = new Model_Article();
		$articleDetails = $article->loadArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/articles/view.php');
	}
}
?>