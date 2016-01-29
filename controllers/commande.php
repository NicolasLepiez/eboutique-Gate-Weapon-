<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/models/commande.php'); 	
class Controller_Commande {

	public function showBillet()
	{
		$id = $_SESSION['id_users'];
		$commande = new Model_Commande();
		$listCommande = $commande->getBillet($id);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/commande.php';
	}

	public function showBilletAdmin()
	{
		$id = $_GET['id'];
		$commande = new Model_Commande();
		$listCommande = $commande->getBillet($id);
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/commande.php';
		
	}

}
