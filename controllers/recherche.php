<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/models/article.php'); 	
class Controller_Recherche {

	/*public function rechercheLicence()
	{
		if (!empty($_POST)) {
		 	if (isset($_POST['recherche_licence'])) {
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
				$licence = new Controller_Article();
				$listLicence = $licence->listLicence();
				//var_dump($listLicence);
				$id_licence = array();
				$j = 0;
				while  ($j < sizeof($listLicence)) {
					//var_dump($listLicence[$j]);
					if (!empty($_POST["'".$listLicence[$j]['nom']."'"]) && $_POST["'".$listLicence[$j]['nom']."'"] == $listLicence[$j]['nom']){

						$id_licence[$j] = $listLicence[$j]['id_licence'] ;
						var_dump($id_licence);
						$j++;
					} else {
						$j++;
					}
				}
			}
			var_dump($_POST);
			//var_dump($id_licence);
			$precision = 'WHERE id_licence IN ('.$id_licence[0];
			for ($i = 1; $i < sizeof($id_licence); $i++) {
				$precision = $precision.','.$id_licence[$i];
			}
			$precision = $precision.')';
			$article = new Model_Article();
			$listArticle = $article->listArticle($precision);
		}
	}

	public function rechercheCategorieSousCat()
	{
		if (!empty($_POST) && isset($_POST['recherche_cat'])) {
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
			$categorie = new Controller_Article();
			$listCat = $categorie->listCategorie();
			$id_categorie = array();
			foreach ($listCat as $categorie) {
				if (!empty($_POST['$categorie["nom"]'])){
					array_push($id_categorie, $categorie['id_categorie']);
				}
			}
			var_dump($id_categorie);

			$sous_categorie = new Controller_Article();
			$listSousCat = $sous_categorie->listSousCategorie();
			$id_sous_categorie = array();
			foreach ($listSousCat as $sous_categorie) {
				if (!empty($_POST['$sous_categorie["nom"]'])){
					array_push($id_sous_categorie, $sous_categorie['id_sous_categorie']);
				}
			}
			var_dump($id_sous_categorie);

		}
	}*/

	public function recherchePrecise()
	{
		if(!empty($_POST['recherche']) && isset($_POST['rechercher'])) {
			$recherche = $_POST['recherche'];
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/models/recherche.php';
			$new_recherche = new Model_Recherche();
			$result_recherche = $new_recherche->getID($recherche);
			//var_dump($result_recherche);
			//var_dump($recherche);
			if (!empty($result_recherche)) {
				$precision = ' WHERE id_article IN ('.$result_recherche[0][0];
				for ($i = 1; $i < sizeof($result_recherche); $i++) {
					$precision = $precision.','.$result_recherche[$i][0];
				}
				$precision = $precision.')';
				$error = '';
				//var_dump($precision);
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/models/article.php';
				$articles = new Model_Article();
				$listArticle = $articles->listArticle($precision);
				require_once($_SERVER['DOCUMENT_ROOT'].'boutique/views/articles/list_recherche.php');
			} else {
				$error = 'Pas de résultat !';
				require_once($_SERVER['DOCUMENT_ROOT'].'boutique/views/articles/list_recherche.php');
			}
		}
	}
}