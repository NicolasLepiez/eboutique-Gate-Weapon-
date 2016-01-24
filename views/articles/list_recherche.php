<div class='container-fluid container__margin'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
				<?php 
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/recherche.php';
				?>
				<p class='aside__title'> Effectuez une recherche par nom ! </p>
				<form action='index.php?c=articles&a=recherche' method='post'>
					<input type='text' name='recherche' class='recherche' placeholder='votre recherche'> <br>
					<input type='submit' class='button' name='rechercher' value='rechercher'>
				</form>

				<?php 
				?>

		</aside>		

		<main class='col-xs-12 col-md-8 main'>
			<h1> <b> Résultat de la recherche : "<?= $recherche ?>" </b> </h1>
			<?php 
				//var_dump($listArticle);
				if (!$error != '') {


					foreach($listArticle as $article) {
				 ?>
			<div class='article__liste col-md-4'>
				<?php echo '<a href="index.php?c=articles&a=view&id='.$article['id_article'].'" class="article__link"> <img src="'.$article['imageURL'].'"   alt="'.$article['nom'].'" class="image"> </a> <br>';?>
				<div class='article__link--text'>
					<?php echo '<a href="index.php?c=articles&a=view&id='.$article['id_article'].'" class="article__link">'.$article['nom'].' <br> '.$article['prix'].'€ </a>';?>
				</div>
				<button class='article__button'> Ajouter au panier </button>
				
			</div>
				<?php
					}
				} else {
					echo $error;
				}
					?>

		</main>
	</div>
</div>