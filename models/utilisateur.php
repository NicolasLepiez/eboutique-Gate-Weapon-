<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/library/db.php');

class Model_Utilisateur {

	private $db;

	public function __construct() 
	{
		$this->db = DB::getInstance();
		
	}

	public function addUsers($nom, $prenom, $pseudo, $email, $age, $mot_de_passe, $numero_rue, $rue, $ville, $code_postal, $error)
	{
		require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/controllers/utilisateur.php');
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
		?>
		<p><?php echo $error ?></p>
		<?php
	}

	public function checkUsers()
	{
		$query = 'SELECT id_users, pseudo, email, mot_de_passe FROM users';
		$resultat = $this->db->get($query);
		return $resultat;
	}
		

}
?>