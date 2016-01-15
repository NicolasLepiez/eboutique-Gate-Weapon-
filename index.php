<?php session_start();
$controller = '';
$action = '';
$type = '';


require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/header.php';


if(!empty($_GET['c']) && !empty($_GET['a'])){
	$controller = $_GET['c'];
	$action = $_GET['a'];
}

if (!empty($_GET['t'])){
	$type = $_GET['t'];
}




if($controller == '' && $action == '') {
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/home.php');
	
} elseif ($controller == 'articles' && $action == 'list' && $type == '') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$controller_article = new Controller_Article();
	$controller_article->listArticle();
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/articles/list.php');

} elseif ($controller == 'articles' && $action == 'list' && $type == 'categorie') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$controller_articleCat = new Controller_Article();
	$controller_articleCat->listArticleByCategorie();
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/articles/list.php');

} elseif ($controller == 'articles' && $action == 'list' && $type == 'licence') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$controller_articleLi = new Controller_Article();
	$controller_articleLi->listArticleByLicence();
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/articles/list.php');

} elseif ($controller == "articles" && $action == "view") {
	if(empty($_GET['id'])) {
		echo "<p>il manque l'id du produit</p>";
	}
   else {
		require_once($_SERVER['DOCUMENT_ROOT']."/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$id = intval($_GET['id']);
		$controller_article->viewArticle($id);
	}

} elseif ($controller == "inscription" && $action == "add") {
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/controllers/utilisateur.php');
	$controller_inscription = new Controller_Utilisateur();
	$controller_inscription->newUsers(); 

} elseif ($controller == 'deconnexion' && $action == 'out') {
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/controllers/utilisateur.php');
	$controller_deconnexion = new Controller_Utilisateur();
	$controller_deconnexion->deconnect();
	
} elseif ($controller == 'connexion' && $action == 'in') {
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/controllers/utilisateur.php');
	$controller_connexion = new Controller_Utilisateur();
	$controller_connexion->connect();

} elseif ($controller == 'profil' && $action == 'view') {
	require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/controllers/profil.php';
	$controller_profil = new Controller_Profil();
	$controller_profil->showInfo();
} elseif ($controller == 'profil' && $action== 'change') {
	require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/controllers/profil.php';
	$controller_profil_change = new Controller_Profil;
	$controller_profil_change->changeInfo();
}



require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/footer.php';
?>