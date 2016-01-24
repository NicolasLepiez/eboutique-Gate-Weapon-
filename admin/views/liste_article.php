<div class='container-fluid'>
	<div class='row'>

		<main class='col-xs-12 main__only'>

			<div class='table-responsive'>
				<table class='table table-bordered table-hover'>
					<tr >
						<th class='table__title'> MINIATURE </th>
						<th class='table__title'> NOM </th>
						<th class='table__title'> PRIX </th>
						<th class='table__title'> QUANTITE </th>
						<th class='table__title'> LICENCE </th>
						<th class='table__title'> CATEGORIE </th>
						<th class='table__title'> SOUS CATEGORIE </th>
						<th class='table__title'> ACTION </th>
					</tr>

					<?php
						foreach ($listArticle as $list) {  
								//var_dump($list);
							?>
							<?=	'<tr>
									<td> <img src="'.$list['imageURL'].'" class="table__image"></td>
									<td>'.$list[1].'</td>
									<td>'.$list['prix'].'</td>
									<td>'.$list['quantite'].'</td>
									<td>'.$list[6].'</td>
									<td>'.$list[7].'</td>
									<td>'.$list[8].'</td>
									<td> <a href="index.php?c=admin&a=modify&id='.$list['id_article'].'"> Modifier</a> / <a href="index.php?c=admin&a=supparticle&id='.$list['id_article'].'"> Supprimer </a></td>
								</tr>'; ?>
							
					<?php } ?>
				</table>
			</div>
		</main>
	</div>
</div>