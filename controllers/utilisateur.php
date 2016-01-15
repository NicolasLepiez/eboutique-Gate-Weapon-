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

			$pseudos = new Model_Utilisateur;
			$isPseudo = $pseudos->checkPseudo($pseudo);


			if ($mot_de_passe != $check_mot_de_passe || 
				strlen($mot_de_passe) < 4 ||
				$isPseudo[0][0] == 1
				 ){
					if ($mot_de_passe != $check_mot_de_passe) {
						$error = 'Les mots de passes ne correspondent pas !';
						require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/erreur_inscription.php';

					} elseif (strlen($mot_de_passe) < 4) {
						$error = 'Votre mots de passe est trop court !';
						require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/erreur_inscription.php';

					} elseif ($isPseudo[0][0] == 1) {
						$error = 'Ce pseudo est deja utilisé, veuillez en choisir un autre';
						require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/erreur_inscription.php';
					}
				
			} else {
				$users = new Model_Utilisateur();
				$newUser = $users->addUsers($nom, $prenom, $pseudo, $email, $age, $mot_de_passe, $numero_rue, $rue, $ville, $code_postal);
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
					$_SESSION['admin'] = $connect['admin'];
				}
			}
			if($_SESSION['admin'] === 1) {
				header('Location: ../boutique/index.php?c=article&a=add');
			} else {
				header('Location: ../boutique/index.php?c=article&a=list');
			}
		} else {
			require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/utilisateur/connexion.php');
		}

		var_dump($_SESSION);  
	}

	public function deconnect()
	{
			session_destroy();
			header('Location: ../boutique/index.php');
	}
}









?>