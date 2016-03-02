	<div class='container-fluid'>
		<div class='row'>

			<main class='col-xs-12 main__only'>
			<?php
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/utilisateur.php';
				$users = new Controller_Utilisateur();
				$listUsers = $users->listUsersAdmin();
				echo '<h1> Commandes de : '.$listUsers[$_GET['id']]['nom'].' </h1>';
				foreach($listCommande as $commande) {
					echo '<div class="commande__description">';
					echo '<h2> Commande numéro '.$commande['numero_commande'].'</h2>';
					echo '<p> Contenu : '.$commande['descriptif'].'</p>';
					echo '<p> Prix total : '.$commande['prix_commande'].'€</p>';
					echo '<p> Date : '.$commande['date_commande'].'<p>';
					echo '</div>';
				}
			
			 ?>
			</main>

		</div>
	</div>
</body>
</html>