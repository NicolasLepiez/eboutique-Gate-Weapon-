<h1> Coucou je suis la vue listing produit </h1>
<?php 
	foreach($listArticle as $article) {
 ?>
 <h2><?php echo $article['pseudo']; ?></h2>
 <p><?php echo $article['email']; ?></p>
 <?php
}
?>
