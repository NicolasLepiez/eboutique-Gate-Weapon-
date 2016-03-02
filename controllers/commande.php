<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/models/commande.php'); 	
class Controller_Commande {


	/**
	 * Fonction permettant d'afficher les billets de commande
	 */
	public function showBillet()
	{
		$id = $_SESSION['id_users'];
		$commande = new Model_Commande();
		$listCommande = $commande->getBillet($id);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/commande.php';
	}

	/**
	 * Fonction permettant d'afficher les billets de commande pour l'administrateur
	 */

	public function showBilletAdmin()
	{
		$id = $_GET['id'];
		$commande = new Model_Commande();
		$listCommande = $commande->getBillet($id);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/commande.php';
		
	}

}
