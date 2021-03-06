<?php
require_once($_SERVER['DOCUMENT_ROOT']).'boutique/models/panier.php';

class Controller_Panier {

	/**
	 * Fonction permettant d'ajouter des articles dans le panier
	 */
	public function addPanier()
	{

		//ajout dans le panier
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
		$controller_article = new Controller_Article();
		$listArticle = $controller_article->listArticlePanier($_GET['id']);
		if (isset($_POST['panier']) && !empty($_SESSION['id_users'])) {
				
			 
				array_push($_SESSION['panier']['id_article'], $_GET['id']);
				array_push($_SESSION['panier']['quantite'], $_POST['quantite']);
			
		}

	}


	/**
	 * Fonction permettant de supprimer les articles dans le panier
	 */
	public function suppArticle()

	{
		$id = $_GET['id'];
		for ($i =0; $i < sizeof($_SESSION['panier']['id_article']); $i++) {
			if ($_SESSION['panier']['id_article'][$i] == $id) {
				unset($_SESSION['panier']['id_article'][$i]);
				$_SESSION['panier']['id_article'] = array_merge($_SESSION['panier']['id_article']);
				unset($_SESSION['panier']['quantite'][$i]);
				$_SESSION['panier']['quantite'] = array_merge($_SESSION['panier']['quantite']);
				echo "<script type='text/javascript'>document.location.replace('index.php?c=panier&a=show');</script>";
			}

		}
		

	}

	/**
	 * Fonction permettant de confirmer le panier et de créer un billet de commande
	 */

	public function confirmPanier()
	{
		if (sizeof($_SESSION['panier']['id_article'] > 0)) {
			$model_panier = new Model_Panier();
			$precision = ' WHERE id_article IN('.$_SESSION['panier']['id_article'][0].',';
			if (sizeof($_SESSION['panier']['id_article']) > 1) {
				for ($i = 1; $i < sizeof($_SESSION['panier']['id_article']); $i++) {
					if ($i == sizeof($_SESSION['panier']['id_article']) -1 ) {
						$precision .= $_SESSION['panier']['id_article'][$i];
					} else {
						$precision .= $_SESSION['panier']['id_article'][$i].',';
					}
					

				}
			}
			$precision .= ')';
			$listArticle = $model_panier->listArticlePanier($precision);

			//Update de la quantité d'un article dans la base de donnée

			for ($j = 0; $j < sizeof($_SESSION['panier']['id_article']); $j++) {

				$quantityPanier = intval($_SESSION['panier']['quantite'][$j]);
				$quantityInit = intval($listArticle[$j]['quantite']);
				if ($quantityInit == 0) {
					$newQuantity = 0;
				} else {
					$newQuantity =  $quantityInit - $quantityPanier;
					if ($newQuantity < 0) {
						$newQuantity = 0;
					}
				}
				$model_panier = new Model_Panier();
				$model_panier->updateQuantity($newQuantity, $_SESSION['panier']['id_article'][$j]);


				
			}
			//Création d'un billet de commande

			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/models/commande.php';
			$numero_commande = rand(1000, 8000);

			$descriptif = $listArticle[0]['nom'].' : '.$_SESSION['panier']['quantite'][0];
			$prix_commande = $listArticle[0]['prix']*$_SESSION['panier']['quantite'][0];
			for ($i = 1; $i < sizeof($_SESSION['panier']['id_article']); $i++) {
				$descriptif .= ', ';
				$descriptif .= $listArticle[$i]['nom'].' : '.$_SESSION['panier']['quantite'][$i];
				$prix_commande += $listArticle[$i]['prix']*$_SESSION['panier']['quantite'][$i];
			}
			$id_users = $_SESSION['id_users'];
			$model_commande = new Model_Commande();
			$model_commande->newBillet($numero_commande, $descriptif, $prix_commande, $id_users);
			

			//On vide la variable session panier
			
			unset($_SESSION['panier']);
			$_SESSION['panier'] = array();
			$_SESSION['panier']['id_article'] = array();
			$_SESSION['panier']['quantite'] = array();
		}
	}
}