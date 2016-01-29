<div class='container-fluid'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
			<ul class='aside__list'> 
				<li>
					<a href='index.php?c=profil&a=view' class='aside__link'>MON PROFIL </a>
				</li>
				<li>
					<a href='index.php?c=commande&a=view' class='aside__link'>MES COMMANDES </a>
				</li>
				<?php 
				if ($_SESSION['admin'] == 0) {
					echo '<li>
						<a href="index.php?c=panier&a=show" class="aside__link">MON PANIER </a>
					</li>';
				}
				?>
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
