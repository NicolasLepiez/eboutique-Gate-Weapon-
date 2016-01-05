<?php session_start();
$controller = "";
$action = "";

if(!empty($_GET['c']) && !empty($_GET['a'])){
	$controller = $_GET['c'];
	$action = $_GET['a'];
}

if($controller == '' && $action == '') {
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/home.php');
}

if($controller == "article" && $action == "list") {
	require_once($_SERVER['DOCUMENT_ROOT']."/boutique/controllers/article.php");
	$controller_article = new Controller_Article();
	$controller_article->listArticle();

} elseif ($controller == "article" && $action == "view") {
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

} elseif ($controller == "connexion" && $action == "enter") {
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/controllers/utilisateur.php');
	$controller_connexion = new Controller_Utilisateur();
	$controller_connexion->connect();

} elseif ($controller == 'deconnexion' && $action == 'out') {
	require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/controllers/utilisateur.php');
	$controller_deconnexion = new Controller_Utilisateur();
	$controller_deconnexion->deconnect();
}
?>