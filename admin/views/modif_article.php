<div class='container-fluid'>
	<div class='row'>

		<main class='col-xs-12 main'>
	
			<h1> JE SUIS LA MODIFICATION ARTICLES </h1>
			<form method='post' class='formulaire form-horizontal'>
				<div class='form-group'>
					<label for='name' class='col-sm-2 control-label'> Nom </label>
					<div class='col-sm-10'>
						<input type='text' name='name' placeholder='Nom' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label for='imageURL' class='col-sm-2 control-label'> URL de l'image </label>
					<div class='col-sm-10'>
						<input type='text' name='imageURL' placeholder='www.imageurl.com' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label for='description' class='col-sm-2 control-label'> Description de l'article </label>
					<div class='col-sm-10'>
						<textarea name='description' placeholder='Ma description' class='form-control'></textarea>
					</div>
				</div>
				<div class='form-group'>
					<label for='price' class='col-sm-2 control-label'> Prix </label>
					<div class='col-sm-10'>
						<input type='number' name='price' placeholder='100' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label for='quantity' class='col-sm-2 control-label'> Quantité </label>
					<div class='col-sm-10'>
						<input type='number' name='quantity' placeholder='30' class='form-control'>
					</div>
				</div>
				<div class='form-group'>
					<label for='licence' class='col-sm-2 control-label'> Licence </label>
					<div class='col-sm-10'>
						<select name='licence' class='form-control'>
							<?php 
								require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
								$list = new Controller_Article();
								$licence = $list->listLicence();
								for ($i=1; $i < sizeof($licence)+1 ; $i++) { 
									echo '<option value="'.$i.'">'.$licence[$i-1]['nom'].'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<div class='form-group'>
					<label for='categorie' class='col-sm-2 control-label'> Categorie </label>
					<div class='col-sm-10'>
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
				</div>
				<div class='form-group'>
					<label for='sous_categorie' class='col-sm-2 control-label'> Sous Categorie </label>
					<div class='col-sm-10'>
						<select name='sous_categorie' class='form-control'>
							<?php 
								require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
								$list = new Controller_Article();
								$sous_categorie = $list->listSousCategorie();
								for ($i=1; $i < sizeof($sous_categorie)+1 ; $i++) { 
									echo '<option value="'.$i.'">'.$sous_categorie[$i-1]['nom'].'</option>';
								}
							?>
						</select>
					</div>
				</div>
				<input type='submit' name='add' class='button' value='Modifier'>

			</form>
		</main>
	</div>
</div>