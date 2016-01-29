<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/utilisateur.php');

class Controller_Utilisateur {

	public function newUsers()
	{
		if (empty($_POST)) {
			$error = "";
			require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/utilisateur/inscription.php');

		} else {

			$nom = htmlspecialchars($_POST['name']);
			$prenom = htmlspecialchars($_POST['firstname']);
			$pseudo = htmlspecialchars($_POST['nickname']);
			$email = htmlspecialchars($_POST['email']);
			$age = htmlspecialchars($_POST['age']);
			$mot_de_passe = sha1($_POST['password']);
			$check_mot_de_passe = sha1($_POST['check_password']);
			$numero_rue = htmlspecialchars($_POST['street_number']);
			$rue = htmlspecialchars($_POST['street']);
			$ville = htmlspecialchars($_POST['town']);
			$code_postal = htmlspecialchars($_POST['postal_code']);
			$image_profil = 'https://pixabay.com/static/uploads/photo/2012/04/26/19/43/profile-42914_960_720.png';

			$pseudos = new Model_Utilisateur;
			$isPseudo = $pseudos->checkPseudo($pseudo);


			if ($mot_de_passe != $check_mot_de_passe || 
				strlen($mot_de_passe) < 4 ||
				$isPseudo[0][0] == 1
				 ){
					if ($mot_de_passe != $check_mot_de_passe) {
						$error = 'Les mot de passes ne correspondent pas !';
						require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/inscription.php';

					} elseif (strlen($mot_de_passe) < 4) {
						$error = 'Votre mot de passe est trop court !';
						require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/inscription.php';

					} elseif ($isPseudo[0][0] == 1) {
						$error = 'Ce pseudo est deja utilisé, veuillez en choisir un autre';
						require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/utilisateur/inscription.php';
					}
				
			} else {
				$users = new Model_Utilisateur();
				$newUser = $users->addUsers($image_profil, $nom, $prenom, $pseudo, $email, $age, $mot_de_passe, $numero_rue, $rue, $ville, $code_postal);
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/utilisateur/inscription_succes.php';


			}
		}
	}

	public function connect()
	{
		$error = '';
		if(!empty($_POST)) {
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$password = sha1($_POST['password']);
			require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/utilisateur.php');
			$checkPseudo = new Model_Utilisateur();
			$doCheckPseudo = $checkPseudo->checkPseudo($pseudo);
			if ($doCheckPseudo[0][0] == 1) {
				$checkPassword = new Model_Utilisateur();
				$doCheckPassword = $checkPassword->checkPassword($password);
				if ($doCheckPassword[0][0] == 1) {
					$info = new Model_Utilisateur();
					$infoUser = $info->getUserInfo($pseudo);
					foreach ($infoUser as $users) {
						$_SESSION['id_users'] = $users['id_users'];
						$_SESSION['email'] = $users['email'];
						$_SESSION['pseudo'] = $users['pseudo'];
						$_SESSION['admin'] = $users['admin'];
						$_SESSION['panier'] = array();
						$_SESSION['panier']['id_article'] = array();
						$_SESSION['panier']['quantite'] = array();
						
					}
					echo "<script type='text/javascript'>document.location.replace('index.php');</script>";

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
 
	}

	public function deconnect()
	{
			session_destroy();
			echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
	}

	public function listUsersAdmin() 
	{
		$users = new Model_Utilisateur();
		$listUsers = $users->listAllUsers();
		return $listUsers;
		
		
	}

	public function listAllUsers() 
	{
		$users = new Model_Utilisateur();
		$listUsers = $users->listAllUsers();
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/utilisateur/list_users.php';
		
	}

	public function suppUser()
	{
		$supp = new Model_Utilisateur();
		$suppression = $supp->suppUser();
		require_once($_SERVER['DOCUMENT_ROOT']).'boutique/admin/views/supp.php';
	}
}