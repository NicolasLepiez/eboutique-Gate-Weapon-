<div class='container-fluid'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
				<p class='aside__title'> Effectuez une recherche par nom ! </p>
				<form action='index.php?c=articles&a=recherche' method='post'>
					<input type='text' name='recherche' class='recherche' placeholder='votre recherche'> <br>
					<input type='submit' class='button' name='rechercher' value='rechercher nom'>
				</form>

		</aside>

		<main class='col-xs-12 col-md-9 main main__description'>
			<div class='row'>
			<?php
				var_dump($articleDetails);
				echo '<h1> <b>'.$articleDetails[0][0].'</b></h1>';
				echo '<img src="'.$articleDetails[0]['imageURL'].'" class="col-md-6" alt="'.$articleDetails[0]['nom'].'" class="image">';
				echo '<h2 class="artilce__description--titre"> Description : </h2> ';
			?>
				<div class='col-md-6 article__description--description'>
				<?php
					echo '<p>'.$articleDetails[0]['description'].'</p>';
					echo '<p> Licence : '.$articleDetails[0][5].'</p>';
					echo '<p> Categorie : '.$articleDetails[0][6].'</p>';
					echo '<p> Sous Categorie : '.$articleDetails[0][7].'</p>';
				?>
				</div>
			<?php
				echo '<h2 class="article__description--prix"> Prix : '.$articleDetails[0]['prix'].'€ </h2>';
				echo '<h2 class="article__description--quantite"> Quantite : '.$articleDetails[0]['quantite'].'</h2>';
			?>
			<button class='article__button article__button--description'> Ajouter au panier </button>
			</div>

			<h2> Commentaires </h2>
			<p> Vous pouvez ici laisser un commentaire : </p>
			<form method='post' class='formulaire'>
				<div class='form-group'>
					<label for='title'> Titre de votre commentaire </label>
					<input type='text' name='title' placeholder='Votre titre' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='commentaire'>Votre commentaire </label>
					<textarea name='commentaire' placeholder='Votre commentaire sur cet article' rows='10'  class='form-control'></textarea>
				</div>
				<input type='submit' name='comment' value='Commenter' class='button'>
			</form>
			<h3> Commentaires précédent : </h3>
			<?php
			$id = intval($_GET['id']);
			require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/commentaire.php';
			$comment = new Controller_Commentaire();
			$listComment = $comment->listComment($id); 
			//var_dump($listComment);	
			foreach ($listComment as $comment) {
				echo '<h4>'.$comment['titre_commentaire'].'</h4>';
				echo '<p> Par <img src="'.$comment['image_profil'].'" class="article__description--image">'.$comment['pseudo'].' :</p>';
				echo '<p>'.$comment['commentaire'].'</p>';
			}
			?>

		</main>
	</div>
</div>