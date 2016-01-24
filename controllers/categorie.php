<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/models/categorie.php');
class Controller_Categorie {

	public function addCatLic()
	{
		if(empty($_POST)) {
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/ajout_categorie.php';
		} else {
			if(!empty($_POST['add_licence'])) {
				$precision = 'licences';
				$nom = htmlspecialchars($_POST['licence']);
				$imageURl = htmlspecialchars($_POST['iconeLicence']);
				$licence = new Model_Categorie();
				$ajout = $licence->addCategorieLicence($precision, $nom, $imageURL);
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/ajout_categorie.php';

			} elseif (!empty($_POST['add_categorie'])) {
				$precision = 'categories';
				$nom = htmlspecialchars($_POST['categorie']);
				$imageURl = htmlspecialchars($_POST['iconeCategorie']);
				$categorie = new Model_Categorie();
				$ajout = $categorie->addCategorieLicence($precision, $nom);
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/ajout_categorie.php';

			} elseif (!empty($_POST['add_sous_categorie'])) {

				$nom = htmlspecialchars($_POST['sous_categorie']);
				$categorie = htmlspecialchars($_POST['categorie']);
				$sous_categorie = new Model_Categorie();
				$ajout = $sous_categorie->addSousCategorie($nom, $categorie);
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/ajout_categorie.php';
			}
		}
		
	}


}
