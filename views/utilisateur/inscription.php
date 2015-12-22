<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>

  </head>
  <body>
	<h1> Bienvenue sur la page d'inscription </h1>
	<p> Veuillez entrer vos informations ci-dessous </p>
	<p> Les champs noté d'une étoile sont obligatoire </p>
	<form method='post'>
		<fieldset>
			<legend> Inscription : </legend>
			<label for='name'> Nom </label>
			<input type='text' name='name' placeholder='NOM'>
			<br>
			<label for='firstname'> Prénom : </label>
			<input type='text' name='firstname' placeholder='Prenom'>
			<br>
			<label for='nickname'> *Pseudo : </label>
			<input type='text' name='nickname' placeholder='Pseudo'>
			<br>
			<label for='email'> *Email : </label>
			<input type='email' name='email' placeholder='adresse@gmail.com'>
			<br>
			<label for='age'> Age : </label>
			<input type='number' name='age' placeholder='18'>
			<br>
			<label for='password'> *Mot de passe : </label>
			<input type='password' name='password' placeholder='password'>
			<br>
			<label for='check_password'> *Répétez mot de passe : </label>
			<input type='password' name='check_password' placeholder='password'>
			<br>
			<label for='street_number'> *Numéro de rue : </label>
			<input type='number' name='street_number' placeholder='8'>
			<br>
			<label for='street'> *Rue : </label>
			<input type='text' name='street' placeholder='rue des lylas'>
			<br>
			<label for='town'> *Ville : </label>
			<input type='text' name='town' placeholder='Rennes'>
			<br>
			<label for='postal_code'> *Code Postal : </label>
			<input type='number' name='postal_code' placeholder='35000'>
			<br>
			<input type='submit' name='submit' value='Envoyer'>

		</fieldset>
	</form>

  </body>

</html>