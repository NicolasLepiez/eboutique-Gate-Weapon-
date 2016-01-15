<h1> JE SUIS LE PROFIL </h1>
<?php foreach($info_profil as $info) {
	echo '<img src="'.$info['image_profil'].'" class="image">';
	echo '<p> Nom : '.$info['nom'].'</p>';
	echo '<p> Prenom : '.$info['prenom'].'</p>';
	echo '<p> Pseudo : '.$info['pseudo'].'</p>';
	echo '<p> Email : '.$info['email'].'</p>';
	echo '<p> Adresse : '.$info['numero_rue'].' '.$info['rue'].'</p>';
	echo '<p> Ville : '.$info['ville'].'</p>';
	echo '<p> Code Postal : '.$info['code_postal'].'</p>';
}
?>
<a href='index.php?c=profil&a=change' class='button'> Modifier le profil </a>