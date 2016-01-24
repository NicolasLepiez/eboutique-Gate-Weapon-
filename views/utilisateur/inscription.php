<div class='container-fluid'>
	<div class='row'>
		<main class='col-md-12 main'>
			<h1> Bienvenue sur la page d'inscription </h1>
			<p> Veuillez entrer vos informations ci-dessous </p>
			<p> Les champs noté d'une étoile sont <b>obligatoire</b> </p>

			<form method='post'>
				<div class='form-group'>
					<label for='name'> Nom </label>
					<input type='text' name='name' placeholder='NOM' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='firstname'> Prénom : </label>
					<input type='text' name='firstname' placeholder='Prenom' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='nickname'> *Pseudo : </label>
					<input type='text' name='nickname' placeholder='Pseudo' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='email'> *Email : </label>
					<input type='email' name='email' placeholder='adresse@gmail.com' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='age'> Age : </label>
					<input type='number' name='age' placeholder='18' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='password'> *Mot de passe : </label>
					<input type='password' name='password' placeholder='password' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='check_password'> *Répétez mot de passe : </label>
					<input type='password' name='check_password' placeholder='password' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='street_number'> *Numéro de rue : </label>
					<input type='number' name='street_number' placeholder='8' class='form-control'>
				</div>
				<div class='form-group'>
				<label for='street'> *Rue : </label>
				<input type='text' name='street' placeholder='rue des lylas' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='town'> *Ville : </label>
					<input type='text' name='town' placeholder='Rennes' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='postal_code'> *Code Postal : </label>
					<input type='number' name='postal_code' placeholder='35000' class='form-control'>
				</div>
				<input type='submit' name='submit' value='Envoyer' class='button'>
			</form>
			<?= $error; ?>
		</main>
	</div>
</div>