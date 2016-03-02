<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/library/db.php');

class Model_Utilisateur {

	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	/**
	 * Fonction permettant de lister les utilisateurs
	 */

	public function listUsers($precision) 
	{
		$query = 'SELECT * FROM users'.$precision.';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	/**
	 * Fonction permettant d'ajouter un utilisateur
	 */

	public function addUsers($image_profil, $nom, $prenom, $pseudo, $email, $age, $mot_de_passe, $numero_rue, $rue, $ville, $code_postal)
	{
		$query = 'INSERT INTO users (image_profil, nom, prenom, pseudo, email, age, mot_de_passe, numero_rue, rue, ville, code_postal) VALUES (:image_profil, :nom, :prenom, :pseudo, :email, :age, :mot_de_passe, :numero_rue, :rue, :ville, :code_postal);';
		$table = array(
				'image_profil' => $image_profil,
				'nom' => $nom,
				'prenom' => $prenom,
				'pseudo' => $pseudo,
				'email' => $email,
				'age' => $age,
				'mot_de_passe' => $mot_de_passe,
				'numero_rue' => $numero_rue,
				'rue' => $rue,
				'ville' => $ville,
				'code_postal' => $code_postal
			);
		$this->db->execute($query, $table);
	}

	/**
	 * Fonction permettant de check les passwords
	 */

	public function checkPassword($password)
	{
		$query = 'SELECT EXISTS(SELECT id_users FROM users WHERE mot_de_passe=\''.$password.'\');';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	/**
	 * Fonction permettant de check les pseudos
	 */

	public function checkPseudo($pseudo)
	{
		$query = 'SELECT EXISTS(SELECT id_users FROM users WHERE pseudo=\''.$pseudo.'\');';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	/**
	 * Fonction permettant de recuperer les info d'un seul utilisateur
	 */

	public function getUserInfo($pseudo)
	{
		$query = 'SELECT id_users, pseudo, email, admin FROM users WHERE pseudo=\''.$pseudo.'\';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	/**
	 * Fonction permettant de récupérer toute la liste des utilisateurs
	 */

	public function listAllUsers() 
	{
		$query = 'SELECT * FROM `users`;';
		$resultat = $this->db->get($query);
		return $resultat;
	}	

	/**
	 * Fonction permettant d'afficher le profil de la session en cours
	 */

	public function checkProfil()
	{
		$query = 'SELECT * FROM users WHERE id_users='.$_SESSION['id_users'].';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	/**
	 * Fonction qui vérifie si un utilisateur est un administrateur
	 */

	public function checkAdmin()
	{
		$query = 'SELECT admin FROM is_admin';
		$resultat = $this->db->get($query);
		return $resultat;
	}


	/**
	 * Fonction permettant de supprimer un utilisateur
	 */
	public function suppUser()
	{
		$query = 'DELETE FROM users WHERE id_users ='.$_GET['id'].';';
		$table = array();
		$resultat = $this->db->execute($query,$table);
		return $resultat;
	}
}
?>