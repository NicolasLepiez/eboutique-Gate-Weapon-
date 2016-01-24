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

		<main class='col-xs-12 col-md-9 main'>

			<h1> Bienvenue sur Gate-Weapon votre armurerie Geek en ligne ! </h1>
			<h2> Dernier produits ajoutés </h2>
			<div class='owl-carousel'>
				<?php 
				for ($i=0; $i < 6 ; $i++) { 
				 	echo '<img src="'.$listArticle[$i]['imageURL'].'">';
				 } 

				?>
				
			</div>
			<h2> Produits phares </h2>
			<div class='owl-carousel owl-theme owl-loaded'>
				<img src=<?= '"'.$listArticle[0]['imageURL'].'"'; ?> class='owl-item'>
				<img src=<?= '"'.$listArticle[1]['imageURL'].'"'; ?> class='owl-item'>
				<img src=<?= '"'.$listArticle[2]['imageURL'].'"'; ?> class='owl-item'>
				<img src=<?= '"'.$listArticle[3]['imageURL'].'"'; ?> class='owl-item'>
			</div>
		</main>

	</div>
</div>