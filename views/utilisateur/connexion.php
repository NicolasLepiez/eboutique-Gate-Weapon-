<div class='container-fluid'>
	<div class='row'>

		<main class='col-md-12 main'>
			<h1> JE SUIS LA CONNEXION </h1>
			<form method='post'>
				<div class='form-group'>
					<label for='pseudo'> Pseudo </label>
					<input type='text' name='pseudo' placeholder='pseudo' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='password'> Mot de Passe </label>
					<input type='password' name='password' placeholder='password' class='form-control'>
				</div>
				<input type='submit' name='connect' class='button' value='Connexion'>
			</form>
			<?= $error; ?>
		</main>

	</div>
</div>