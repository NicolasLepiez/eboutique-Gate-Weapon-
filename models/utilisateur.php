<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/library/db.php');

class Model_Utilisateur {

	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	public function addUsers($nom, $prenom, $pseudo, $email, $age, $mot_de_passe, $numero_rue, $rue, $ville, $code_postal)
	{
		$query = 'INSERT INTO users (nom, prenom, pseudo, email, age, mot_de_passe, numero_rue, rue, ville, code_postal) VALUES (:nom, :prenom, :pseudo, :email, :age, :mot_de_passe, :numero_rue, :rue, :ville, :code_postal);';
		$table = array(
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

	public function checkUsers()
	{
		$query = 'SELECT id_users, pseudo, admin, email, mot_de_passe FROM users';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function checkProfil()
	{
		$query = 'SELECT * FROM users WHERE id_users='.$_SESSION['id_users'].';';
		$resultat = $this->db->get($query);
		return $resultat;
	}

	public function checkPseudo($pseudo)
	{
		$query = 'SELECT EXISTS(SELECT id_users FROM users WHERE pseudo=\''.$pseudo.'\');';
		$resultat = $this->db->get($query);
		return $resultat;
	}	

	public function checkAdmin()
	{
		$query = 'SELECT admin FROM is_admin';
		$resultat = $this->db->get($query);
		return $resultat;
	}

}
?>