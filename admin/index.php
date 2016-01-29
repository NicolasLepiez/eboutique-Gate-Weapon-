<?php
$controller = "";
$action = "";

require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/admin/views/header.php';

if(!empty($_GET['c']) && !empty($_GET['a'])){
	$controller = $_GET['c'];
	$action = $_GET['a'];
}

if ($controller == '' && $action == '') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/home_admin.php';
	$articleUser = new Controller_Admin();
	$articleUser->listLastArticleUser();

	

}

 elseif ($controller == "articles" && $action == "add") {
	require_once($_SERVER['DOCUMENT_ROOT']."/boutique/controllers/article.php");
	$article = new Controller_Article();
	$article->addArticle();

} elseif ($controller == 'categorie' && $action == 'add') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/categorie.php';
	$categorie = new Controller_Categorie();
	$categorie->addCatLic();

} elseif ($controller == 'admin' && $action == 'article') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$article = new Controller_Article();
	$article->listArticleAdmin();

} elseif ($controller == 'admin' && $action == 'users') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/utilisateur.php';
	$users = new Controller_Utilisateur();
	$listUsers = $users->listUsersAdmin();
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/list_users.php';

} elseif ($controller == 'admin' && $action == 'modify') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$article = new Controller_Article();
	$id = intval($_GET['id']);
	$article->changeArticle($id);

} elseif ($controller == 'admin' && $action == 'supparticle') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$supp = new Controller_Article();
	$supp->suppArticle();
	
} elseif ($controller == 'admin' && $action == 'suppuser') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/utilisateur.php';
	$supp = new Controller_Utilisateur();
	$supp->suppUser();
	
} elseif ($controller == 'admin' && $action == 'commande') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/commande.php';
	
	$controller_commande = new Controller_Commande();
	$controller_commande->showBilletAdmin();
	
	
}


//require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/footer.php';
?>