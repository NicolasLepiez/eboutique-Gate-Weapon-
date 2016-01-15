<?php
require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/models/utilisateur.php';
require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/models/profil.php');
class Controller_Profil {

	public function showInfo()
	{
		$profil = new Model_Profil();
		$info_profil = $profil->getInfo();
		require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/profil.php';
	}

	public function changeInfo()
	{
		if(empty($_POST)) {
			require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/profil_modify.php';
		} else {
			$image_profil = htmlspecialchars($_POST['image_profil']);
			$nom = htmlspecialchars($_POST['name']);
			$prenom = htmlspecialchars($_POST['firstname']);
			$email = htmlspecialchars($_POST['email']);
			$numero_rue = htmlspecialchars($_POST['street_number']);
			$rue = htmlspecialchars($_POST['street']);
			$ville = htmlspecialchars($_POST['town']);
			$code_postal = htmlspecialchars($_POST['postal_code']);

			$user_info = new Model_Utilisateur();
			$user_check = $user_info->checkProfil();
			var_dump($user_check);

			if (empty($image_profil)) {
				$image_profil = $user_check[0]['image_profil'];
			}

			if (empty($nom)) {
				$nom = $user_check[0]['nom'];
			}
			if (empty($prenom)) {
				$prenom = $user_check[0]['prenom'];
			}
			if (empty($email)) {
				$email = $user_check[0]['email'];
			}
			if (empty($numero_rue)) {
				$numero_rue = $user_check[0]['numero_rue'];
			}
			if (empty($rue)) {
				$rue = $user_check[0]['rue'];
			}
			if (empty($ville)) {
				$ville = $user_check[0]['ville'];
			}
			if (empty($code_postal)) {
				$code_postal = $user_check[0]['code_postal'];
			}

			$listChange = new Model_Profil();
			$change = $listChange->changeInfo($image_profil, $nom, $prenom, $email, $numero_rue, $rue, $ville, $code_postal);
			require_once($_SERVER['DOCUMENT_ROOT']).'/boutique/views/profil_reussite.php';
		}
	}

}