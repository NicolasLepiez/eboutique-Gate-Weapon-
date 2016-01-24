<div class='container-fluid'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
			<ul>
				<li>
					<a href='index.php?c=profil&a=view'> PROFIL </a>
				</li>
				<li>
					<a href='#'> COMMANDE </a>
				</li>
				<li>
					<a href='#'> PANIER </a>
				</li>
			</ul>

		</aside>


		<main class='col-xs-12 col-md-9 main'>
			<h1> JE SUIS LE PROFIL </h1>
			<div class='profil'>
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
			</div>
		</main>

	</div>
</div>
