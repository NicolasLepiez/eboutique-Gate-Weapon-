<div class='container-fluid'>
	<div class='row'>
		<main class='col-xs-12 main__only'>
			<h1> Formulaire de contact </h1>
			<p> Vous avez un problème ou une question ? Contacter nous et nous tâcheront de vous répondre le plus vite possible ! </p>
			<p> Dans le cas d'un objet défectueux ou d'un problème de livraison merci d'indiquer le numéro de votre commande.</p>

			<form class='formulaire' method='post'>
				<div class='form-group'>
					<label for='sujet'>L'objet de votre message </label>
					<select name='sujet' class='form-control'>
						<option value='Question(s)'> Question(s) </option>
						<option value='Objet défectueux'> Objet défectueux </option>
						<option value='Problème de livraison'> Problème de livraison </option>
					</select>
				</div>
				<div class='form-group'>
					<label for='message'> Votre Message </label>
					<textarea name='message' placeholder='Votre message' class='form-control' rows='15'></textarea>
				</div>
				<input type='submit' value='Envoyer' name='envoyer' class='button'>
			</form>

		</main>
	</div>
</div>