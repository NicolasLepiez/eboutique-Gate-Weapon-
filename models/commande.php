<?php
require_once($_SERVER['DOCUMENT_ROOT'].'boutique/library/db.php');
class Model_Commande {
	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}


	/**
	 * Fonction permettant de créer un nouveau billet de commande
	 */
	public function newBillet($numero_commande, $descriptif, $prix_commande, $id_users)

	{
		$query = 'INSERT INTO commande (numero_commande, descriptif, date_commande, prix_commande, id_users) VALUES (:numero_commande, :descriptif, NOW(), :prix_commande, :id_users)';
		$table = array (
			'numero_commande' => $numero_commande,
			'descriptif' => $descriptif,
			'prix_commande' => $prix_commande,
			'id_users' => $id_users
			);
		$this->db->execute($query, $table);
	}


	/**
	 * Fonction permettant de récupérer les infos sur les billets de commande
	 */
	public function getBillet($id)
	{
		$query = 'SELECT * FROM commande WHERE id_users = '.$id;
		$resultat = $this->db->get($query);
		return $resultat;
	}

}