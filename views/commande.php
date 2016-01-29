<div class='container-fluid'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
			<ul class='aside__list'> 
				<li>
					<a href='index.php?c=profil&a=view' class='aside__link'>MON PROFIL </a>
				</li>
				<li>
					<a href='index.php?c=commande&a=view' class='aside__link'>MES COMMANDE </a>
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
			<h1> Vos commandes </h1>
			<?php 
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