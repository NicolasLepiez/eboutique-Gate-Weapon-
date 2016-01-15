	<h1> Coucou je suis la vue listing produit </h1>
	<?php 
		foreach($listArticle as $article) {
	 ?>
	 <div class='article__liste'>
		 <h2><?php echo $article['nom']; ?></h2>
		 <?php echo '<img src='.$article['imageURL'].' alt="Master Sword" class="image">';?>
		 <p> Prix : <?php echo $article['prix']; ?></p>
		 <p> Quantité : <?php echo $article['quantite']; ?></p>
		 <?php echo '<a href="index.php?c=articles&a=view&id='.$article['id_article'].'">Détails</a>';
		}
		?>
	</div>
