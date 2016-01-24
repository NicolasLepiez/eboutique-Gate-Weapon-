<?php 
$controller = '';
$action = '';
$type = '';


require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/header.php';


if(!empty($_GET['c']) && !empty($_GET['a'])){
	$controller = $_GET['c'];
	$action = $_GET['a'];
}

if (!empty($_GET['t'])){
	$type = $_GET['t'];
}




if($controller == '' && $action == '') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$controller_article = new Controller_Article();
	$controller_article->listArticleCarousel();

	
} elseif ($controller == 'articles' && $action == 'list' && $type == '') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$controller_article = new Controller_Article();
	$controller_article->listArticle();
	require_once($_SERVER['DOCUMENT_ROOT'].'boutique/views/articles/list.php');

} elseif ($controller == 'articles' && $action == 'list' && $type == 'categorie') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$controller_articleCat = new Controller_Article();
	$controller_articleCat->listArticleByCategorie();

} elseif ($controller == 'articles' && $action == 'list' && $type == 'licence') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
	$controller_articleLi = new Controller_Article();
	$controller_articleLi->listArticleByLicence();

} elseif ($controller == 'articles' && $action == 'recherche') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/recherche.php';
	$controller_recherche_precise = new Controller_Recherche();
	$controller_recherche_precise->recherchePrecise();

} elseif ($controller == "articles" && $action == "view") {
	if(empty($_GET['id'])) {
		echo "<p>il manque l'id du produit</p>";
	}
   else {
		require_once($_SERVER['DOCUMENT_ROOT']."boutique/controllers/article.php");
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/commentaire.php';
		$controller_article = new Controller_Article();
		$id = intval($_GET['id']);
		$controller_article->viewArticle($id);
		$controller_commentaire = new Controller_Commentaire();
		$controller_commentaire->addComment($id);


	}

} elseif ($controller == "inscription" && $action == "add") {
	require_once($_SERVER['DOCUMENT_ROOT'].'boutique/controllers/utilisateur.php');
	$controller_inscription = new Controller_Utilisateur();
	$controller_inscription->newUsers(); 

} elseif ($controller == 'deconnexion' && $action == 'out') {
	require_once($_SERVER['DOCUMENT_ROOT'].'boutique/controllers/utilisateur.php');
	$controller_deconnexion = new Controller_Utilisateur();
	$controller_deconnexion->deconnect();
	
} elseif ($controller == 'connexion' && $action == 'in') {
	require_once($_SERVER['DOCUMENT_ROOT'].'boutique/controllers/utilisateur.php');
	$controller_connexion = new Controller_Utilisateur();
	$controller_connexion->connect();

} elseif ($controller == 'profil' && $action == 'view') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/profil.php';
	$id = $_SESSION['id_users'];
	$controller_profil = new Controller_Profil();
	$info_profil = $controller_profil->showInfo($id);
	require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/profil.php';
	
} elseif ($controller == 'profil' && $action== 'change') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/profil.php';
	$controller_profil_change = new Controller_Profil;
	$controller_profil_change->changeInfo();

} elseif ($controller == 'users' && $action == 'view') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/utilisateur.php';
	$users = new Controller_Utilisateur();
	$users->listAllUsers();

} elseif ($controller == 'users' && $action == 'particular') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/profil.php';
	$id = $_GET['id'];
	$controller_profil = new Controller_Profil();
	$info_profil = $controller_profil->showInfo($id);
	require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/profil_particular.php';

} elseif ($controller == 'contact' && $action == 'send') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/mail.php';
	$controller_mail = new Controller_Mail();
	$controller_mail->sendMail();

} elseif ($controller == 'about' && $action == 'view') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/a_propos.php';

} elseif ($controller == 'gcv' && $action == 'view') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/gcv.php';

} elseif ($controller == 'mention' && $action == 'view') {
	require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/mention.php';
}



require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/footer.php';