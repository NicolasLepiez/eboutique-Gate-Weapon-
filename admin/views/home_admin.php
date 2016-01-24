<div class='container-fluid'>
	<div class='row'>

		<main class='col-xs-12 main'>

			<h2> DERNIER ARTICLES AJOUTES </h2>
			<?php 

				 
					//var_dump($listArticle);
						for ($i=0; $i < 3 ; $i++) {
						?>
						<p class='col-md-4'> <?= '<img src="'.$listArticle[$i]['imageURL'].'"class="image">'.$listArticle[$i]['nom']; ?></p>
				<?php
						}
					
				?>
			<h2> DERNIER UTILISATEUR INSCRIT </h2>
			<?php 
				for ($i=0; $i < 3; $i++) {
					?>
					<p class='col-md-4'> <?= '<img src="'.$listUsers[$i]['image_profil'].'"class="image">'.$listUsers[$i]['pseudo']; ?></p>
				<?php
				}
			?>
		</main>
	</div>
</div>