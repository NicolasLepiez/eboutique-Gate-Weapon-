<div class='container-fluid'>
	<div class='row'>

		<main class='col-xs-12 main__only'>

			<form class='formulaire form-inline' method='post'>
				<div class='form-group'>
					<label for='licence'>Licence</label>
					<input type='text' name='licence' placeholder='The Legend of Zelda' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='iconeLicence' >Icone</label>
					<input type='text' name='iconeLicence' placeholder='www.iconelicence.com' class='form-control'>.
				</div>
					<input type='submit' name='add_licence' class='button'>
			</form>

			<form method='post' class='formulaire form-inline'>
				<div class='form-group'>
					<label for='categorie'> Categorie : </label>
					<input type='text' name='categorie' placeholder='Armes de mêlées' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='iconeCategorie'> Icone : </label>
					<input type='text' name='iconeCategorie' placeholder='www.iconecategorie.com' class='form-control'>
				</div>
				<input type='submit' name='add_categorie' class='button'>
			</form>

			<form method='post' class='formulaire form-inline'>
				<div class='form-group'>
					<label for='sous_categorie'> Sous categorie : </label>
					<input type='text' name='sous_categorie' placeholder='Tranchante' class='form-control'>
				</div>
				<div class='form-group'>
					<label for='categorie'> Categorie </label>
					<select name='categorie' class='form-control'>
						<?php 
							require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
							$list = new Controller_Article();
							$categorie = $list->listCategorie();
							for ($i=1; $i < sizeof($categorie)+1 ; $i++) { 
								echo '<option value="'.$i.'">'.$categorie[$i-1]['nom'].'</option>';
							}
							
						?>
					</select>
				</div>
				<input type='submit' name='add_sous_categorie' class='button'>
				<br>
			</form>
		</main>
	</div>
</div>