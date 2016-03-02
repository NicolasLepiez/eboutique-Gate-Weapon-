<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/models/article.php'); 	
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/utilisateur.php');
class Controller_Admin {
	/**
	 * Fonction permettant de lister les articles sur la page home des admins
	 */

	public function listLastArticleUser() 
	{
		$precision1 = ' ORDER BY id_article DESC';
		$article = new Model_Article();
		$listArticle = $article->listArticle($precision1);
		$precision2 = ' ORDER BY id_users DESC';
		$users = new Model_Utilisateur();
		$listUsers = $users->listUsers($precision2);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/home_admin.php';
		
	}
}