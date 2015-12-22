<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/utilisateur.php');

class Controller_Utilisateur {

	public function newUsers()
	{
		if (empty($_POST)) {

			require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/utilisateur/inscription.php');

		} else {

			$nom = htmlspecialchars($_POST['name']);
			$prenom = htmlspecialchars($_POST['firstname']);
			$pseudo = htmlspecialchars($_POST['nickname']);
			$email = htmlspecialchars($_POST['email']);
			$age = htmlspecialchars($_POST['age']);
			$mot_de_passe = htmlspecialchars($_POST['password']);
			$check_mot_de_passe = htmlspecialchars($_POST['check_password']);
			$numero_rue = htmlspecialchars($_POST['street_number']);
			$rue = htmlspecialchars($_POST['street']);
			$ville = htmlspecialchars($_POST['town']);
			$code_postal = htmlspecialchars($_POST['postal_code']);

			if ($mot_de_passe != $check_mot_de_passe){
				$error = 'Les mots de passes ne correspondent pas !';
			} else {
				$users = new Model_Utilisateur();
				$newUser = $users->addUsers($nom, $prenom, $pseudo, $email, $age, $mot_de_passe, $numero_rue, $rue, $ville, $code_postal, $error);
			}
		}
	}

	public function connect()
	{
		if(!empty($_POST)) {
			require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/utilisateur.php');
			$connect = new Model_Utilisateur();
			$doConnect = $connect->checkUsers();
			foreach ($doConnect as $connect) {
				if ($connect['pseudo'] == $_POST['pseudo'] && $connect['mot_de_passe'] == $_POST['password']) {
					$_SESSION['id_users'] = $connect['id_users'];
					$_SESSION['email'] = $connect['email'];
					header('Location: ../boutique/index.php?c=article&a=list');
				}
			}
		} else {
			require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/utilisateur/connexion.php');
		}
	}
}









?>