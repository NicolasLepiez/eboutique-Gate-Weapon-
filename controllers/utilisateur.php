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
		$error = '';
		if(!empty($_POST)) {
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$password = htmlspecialchars($_POST['password']);
			require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/utilisateur.php');
			$checkPseudo = new Model_Utilisateur();
			$doCheckPseudo = $checkPseudo->checkPseudo($pseudo);
			var_dump($doCheckPseudo);
			if ($doCheckPseudo[0][0] == 1) {
				$checkPassword = new Model_Utilisateur();
				$doCheckPassword = $checkPassword->checkPassword($password);
				var_dump($doCheckPassword);
				if ($doCheckPassword[0][0] == 1) {
					$info = new Model_Utilisateur();
					$infoUser = $info->getUserInfo($pseudo);
					foreach ($infoUser as $users) {
						$_SESSION['id_users'] = $users['id_users'];
						$_SESSION['admin'] = $users['admin'];
						header('Location: ../boutique/index.php?c=articles&a=list');
					}
				} else {
					$error = 'Une erreur est survenu : mot de passe incorrect !';
					require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/utilisateur/connexion.php');
				}	
			} else {
				$error = 'Une erreur est survenu : Pseudo incorrect !';
				require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/utilisateur/connexion.php');
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