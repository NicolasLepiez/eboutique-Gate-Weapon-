<div class='container-fluid'>
	<div class='row'>

		<aside class='col-xs-12 col-md-3 aside__margin'>
			<ul>
				<li>
					<a href='index.php?c=profil&a=view'> PROFIL </a>
				</li>
				<li>
					<a href='#'> COMMANDE </a>
				</li>
				<li>
					<a href='#'> PANIER </a>
				</li>
			</ul>

		</aside>

		<main class='col-xs-12 col-md-9 main'>
			<div class='profil'>
				<h1> JE SUIS LA MODIFCATION DU PROFIL </h1>
				<form method='post'>
					<label for='image_profil'> Image de Profil (URL) : </label>
					<input type='text' name='image_profil' placeholder='urldemonimage.com'>
					<br>
					<label for='name'> Nom : </label>
					<input type='text' name='name' placeholder='NOM'>
					<br>
					<label for='firstname'> Prénom : </label>
					<input type='text' name='firstname' placeholder='Prenom'>
					<br>
					<label for='email'> Email : </label>
					<input type='email' name='email' placeholder='adresse@gmail.com'>
					<br>
					<label for='street_number'> Numéro de rue : </label>
					<input type='number' name='street_number' placeholder='8'>
					<br>
					<label for='street'> Rue : </label>
					<input type='text' name='street' placeholder='rue des lylas'>
					<br>
					<label for='town'> Ville : </label>
					<input type='text' name='town' placeholder='Rennes'>
					<br>
					<label for='postal_code'> Code Postal : </label>
					<input type='number' name='postal_code' placeholder='35000'>
					<br>
					<input type='submit' name='submit' value='Envoyer' class='button'>
				</form>
			</div>
			<?= $message; ?>
		</main>

	</div>
</div>