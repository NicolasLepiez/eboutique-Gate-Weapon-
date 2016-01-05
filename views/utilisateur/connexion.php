<?php require_once($_SERVER['DOCUMENT_ROOT'].'/boutique/views/header.php'); ?>
	
	<h1> JE SUIS LA CONNEXION </h1>
	<form method='post'>
		<fieldset>
			<legend> CONNEXION : </legend>
			<label for='pseudo'> Pseudo </label>
			<input type='text' name='pseudo' placeholder='pseudo'>
			<br>
			<label for='password'> Mot de Passe </label>
			<input type='password' name='password' placeholder='password'>
			<label for='connect'> connexion </label>
			<input type='submit' name='connect'>
		</fieldset>
	</form>
	
</body>

</html>