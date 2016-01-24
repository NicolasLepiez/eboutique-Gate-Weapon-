<?php 
class Controller_Mail{

	public function sendMail()
	{

		if(empty($_POST)) {
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/views/contact.php';
		} else {

			$objet = $_POST['sujet']; // Déclaration de l'objet du message.
			$message_txt = $_POST['message']; // Déclaration du message format texte.

			$mail = 'nicolas@lepiez.net'; // Déclaration de l'adresse de destination.

			if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) { // Filtrage des serveurs mail qui rencontre des bugs.
				$passage_ligne = "\r\n";

			} else {
				$passage_ligne = "\n";
			}

			$boundary = "-----=".md5(rand()); // Déclaration de la boundary qui sépare les différentes partie d'un email.

			// ===== Création du header de l'email
			$header = 'From "'.$_SESSION['pseudo'].'" <'.$_SESSION['email'].'>'.$passage_ligne; // expéditeur
			$header.= 'Reply-to: "'.$_SESSION['pseudo'].'" <'.$_SESSION['email'].'>'.$passage_ligne; // adresse de retour
			$header.= 'MIME-Version: 1.0'.$passage_ligne; // Donne la version de l'email au serveur qui le reçoit
			$header.= 'Content-Type: multipart/alternative;'.$passage_ligne.'boundary="'.$boundary.'"'.$passage_ligne; // Permet d'envoyer un message au format HTML et au format texte
			// =====

			// ===== Création du message
			$message = $passage_ligne.'--'.$boundary.$passage_ligne;
			// ===== Ajout du message format texte
			$message.= 'Content-Type: text/plain; charset="ISO-8859-1"'.$passage_ligne; // déclaration du type, utilisation de charset="ISO-8859-1" car supporté par tous les webmail contrairement à l'UTF-8
			$message.= 'Content-Transfer-Encoding: 10bit'.$passage_ligne; // définition de la taille maximal du message en bit
			$message.= $passage_ligne.$message_txt.$passage_ligne;
			// =====
			// =====

			mail($mail,$objet,$message,$header); // Envoie du message

		}


	}
}