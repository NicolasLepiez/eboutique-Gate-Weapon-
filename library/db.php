<?php
class DB {

	private static $_instance = null;
	public $connexionBDD = null;

	private function __construct() 
	{
		$this->connexionBDD = new PDO("mysql:host=localhost;dbname=eboutique", "root", "");

	}

	public static function getInstance() 
	{
		if(is_null(self::$_instance)) {
			self::$_instance = new DB();
		}
		return self::$_instance;
	}
	public function get($query) 
	{
		$reponse = self::$_instance->connexionBDD->query($query);
		$resultat = $reponse->fetchAll();
		return $resultat;
	}

	public function execute($query, $table)
	{
		$req = self::$_instance->connexionBDD->prepare($query);
		$resultat = $req->execute($table);
		return $resultat;
	}

}
?>