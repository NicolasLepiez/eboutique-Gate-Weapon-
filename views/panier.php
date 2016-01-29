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
			<h1> PANIER </h1>
			<?php
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
			$controller_article = new Controller_Article();
			$total = 0;
			for ($i = 0; $i < sizeof($_SESSION['panier']['id_article']); $i++) {


				$listArticle = $controller_article->listArticlePanier($_SESSION['panier']['id_article'][$i]);
				echo '<div class="article__panier col-md-4 col-sm-6 col-xs-12">';
				echo '<h2>'.$listArticle[0]['nom'].'</h2>';
				echo '<img src="'.$listArticle[0]['imageURL'].'" class="img-responsive">';
				echo '<p> Quantité : '.$_SESSION['panier']['quantite'][$i].'</p>';
				echo '<p> Prix unité : '.$listArticle[0]['prix'].'€</p>';
				echo '<p> Prix total : '.$listArticle[0]['prix']*$_SESSION['panier']['quantite'][$i].'€</p>';
				echo '<a href="index.php?c=panier&a=delete&id='.$listArticle[0]['id_article'].'" class="button"> Supprimer </a>';
				echo '</div>';
				$total += $listArticle[0]['prix']*$_SESSION['panier']['quantite'][$i];
			
			}
			echo '<div class="panier__bas col-xs-12">';
			echo '<p> Valeur totale de votre panier : '.$total.'€</p>';


	
		?>
		<a href='index.php?c=panier&a=confirm' class='button'> Valider Panier </a>
	</div>

		</main>
	</div>
</div>