<div class='container-fluid'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
			<ul class='aside__list'> 
				<li>
					<a href='index.php?c=profil&a=view' class='aside__link'>MON PROFIL </a>
				</li>
				<li>
					<a href='index.php?c=commande&a=view' class='aside__link'>MES COMMANDES </a>
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
			<div class='profil'>
				<h1> JE SUIS LA MODIFCATION DU PROFIL </h1>
				<form method='post'>
					<div class='form-group'>
						<label for='image_profil'> Image de Profil (URL) : </label>
						<input type='text' name='image_profil' placeholder='urldemonimage.com' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='name'> Nom : </label>
						<input type='text' name='name' placeholder='NOM' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='firstname'> Prénom : </label>
						<input type='text' name='firstname' placeholder='Prenom' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='email'> Email : </label>
						<input type='email' name='email' placeholder='adresse@gmail.com' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='street_number'> Numéro de rue : </label>
						<input type='number' name='street_number' placeholder='8' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='street'> Rue : </label>
						<input type='text' name='street' placeholder='rue des lylas' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='town'> Ville : </label> 
						<input type='text' name='town' placeholder='Rennes' class='form-control'>
					</div>
					<div class='form-group'>
						<label for='postal_code'> Code Postal : </label>
						<input type='number' name='postal_code' placeholder='35000' class='form-control'>
					</div>
					<input type='submit' name='submit' value='Envoyer' class='button'>
				</form>
			</div>
			<?= $message; ?>
		</main>

	</div>
</div>