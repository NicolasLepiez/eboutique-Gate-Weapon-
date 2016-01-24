<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/library/db.php');
class Model_Profil {
	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	public function getInfo($id)
	{
		$query = 'SELECT * FROM users WHERE id_users ='.$id.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function changeInfo($image_profil, $nom, $prenom, $email, $numero_rue, $rue, $ville, $code_postal)
	{
		$query = 'UPDATE users SET image_profil = :image_profil, nom = :nom, prenom = :prenom, email = :email, numero_rue = :numero_rue, rue = :rue, ville = :ville, code_postal = :code_postal WHERE id_users ='.$_SESSION['id_users'].';';
		$table = array (
				'image_profil' => $image_profil,
				'nom' => $nom,
				'prenom' => $prenom,
				'email' => $email,
				'numero_rue' => $numero_rue,
				'rue' => $rue,
				'ville' => $ville,
				'code_postal' => $code_postal
			);
		$resultat = $this->db->execute($query,$table);
		return $resultat;
	}

}