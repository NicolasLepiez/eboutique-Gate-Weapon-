
<div class='container-fluid container__margin'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
				<?php 
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/recherche.php';
				?>
				<p class='aside__title'> Effectuez une recherche par nom ! </p>
				<form action='index.php?c=articles&a=recherche' method='post'>
					<input type='text' name='recherche' class='recherche' placeholder='votre recherche'> <br>
					<input type='submit' class='button' name='rechercher' value='rechercher nom'>
				</form>

				<?php 
				?>

		</aside>

	<main class='col-xs-12 col-md-9 main'>
			<?php 
				require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
				$controller_categorie = new Controller_Article();
				$listCategorie = $controller_categorie->listCategorie();
				foreach ($listCategorie as $categorie) {
					if ($categorie['id_categorie'] == $_GET['id']) {
						echo '<h1> <b> <img src="'.$categorie['imageURL'].'" class="article__image"> Produits '.$categorie['nom'].' <img src="'.$categorie['imageURL'].'" class="article__image"> </b> </h1>';
					}
					
				}
				
				//var_dump($listArticle);
				foreach($listArticle as $article) {
			 ?>
			<div class='article__liste col-md-4'>
				<?php echo '<a href="index.php?c=articles&a=view&id='.$article['id_article'].'" class="article__link"> <img src="'.$article['imageURL'].'"   alt="'.$article['nom'].'" class="image img-reponsive"> </a> <br>';?>
				<div class='article__link--text'>
					<?php echo '<a href="index.php?c=articles&a=view&id='.$article['id_article'].'" class="article__link">'.$article['nom'].' <br> '.$article['prix'].'€ </a>';?>
				</div>
				
				
			</div>
			<?php
				}
				?>
		</main>

		

		
		
		
	</div>
</div>