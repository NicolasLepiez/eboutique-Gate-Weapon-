<div class="container-fluid">
	<div class="row">

		<aside class='col-xs-12 col-md-3 aside__margin'>
						<?php 
						require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/recherche.php';
						?>
						<form action='index.php?c=articles&a=recherche' method='post'>
							<input type='text' name='recherche' class='recherche' placeholder='votre recherche'> <br>
							<input type='submit' class='button' name='rechercher' value='rechercher_nom'>
						</form>

						<?php 
						?>

		</aside>

		<main class='col-xs-12 col-md-9 main__home'>
			<h1> Bienvenue sur Gate-Weapon votre armurerie Geek en ligne ! </h1>
			<div class='home__produit row'>
				<h2> Dernier produits ajoutés </h2>
					
						<?php 
						for ($i=0; $i < 6 ; $i++) { 
							echo '<div class=" col-md-4">';
						 	echo '<img src="'.$listArticle[$i]['imageURL'].'" class="image col-xs-12 col-sm-6 col-md-4 img-responsive">';
						 	echo '</div>';
						 } 

						?>

			</div>
				
			<div class='home__produit row'>
				<h2> Produits phares </h2>
					<img src=<?= '"'.$listArticle[0]['imageURL'].'"'; ?> class="col-xs-12 col-sm-6 col-md-4 img-responsive" >
					<img src=<?= '"'.$listArticle[8]['imageURL'].'"'; ?> class="col-xs-12 col-sm-6 col-md-4 img-responsive" >
					<img src=<?= '"'.$listArticle[5]['imageURL'].'"'; ?> class="col-xs-12 col-sm-6 col-md-4 img-responsive" >
					<img src=<?= '"'.$listArticle[10]['imageURL'].'"'; ?> class="col-xs-12 col-sm-6 col-md-4 img-responsive" >
			</div>
		</main>

	</div>
</div>