<div class='container-fluid'>
	<div class='row'>

		<main class='col-xs-12 main__only'>
		
			<div class='table-responsive'>
				<table class='table table-bordered'>
					<tr>
						<th class='table__title'> MINIATURE </th>
						<th class='table__title'> NOM </th>
						<th class='table__title'> PRENOM </th>
						<th class='table__title'> PSEUDO </th>
						<th class='table__title'> ADMIN </th>
						<th class='table__title'> EMAIL </th>
						<th class='table__title'> AGE </th>
						<th class='table__title'> ADRESSE </th>
						<th class='table__title'> VILLE </th>
						<th class='table__title'> ACTION </th>
					</tr>

					<?php 
					foreach ($listUsers as $list) {
						
						if ($list['admin'] == 1) {
							$is_admin = 'oui';
						} else {
							$is_admin = 'non';
						}

						if (empty($list['age'])) {
							$list['age'] = 'Non défini';
						}

						if (empty($list['nom'])) {
							$list['nom'] = 'Non défini';
						}

						if (empty($_list['prenom'])) {
							$list['prenom'] = 'Non défini';
						}
						$id = $list['id_users']-1;

						?> 
						<?= '<tr>
								<td> <img src="'.$list['image_profil'].'" class="table__image"></td>
								<td>'.$list['nom'].'</td>
								<td >'.$list['prenom'].'</td>
								<td>'.$list['pseudo'].'</td>
								<td>'.$is_admin.'</td>
								<td>'.$list['email'].'</td>
								<td>'.$list['age'].'</td>
								<td>'.$list['numero_rue'].' '.$list['rue'].'</td>
								<td>'.$list['code_postal'].' '.$list['ville'].'</td>

								<td> <a href="index.php?c=admin&a=commande&id='.$id.'" class="table__link">Voir commandes </a> /<a href="index.php?c=admin&a=suppuser&id='.$id.'" class="table__link"> Supprimer </a>

							</tr>'; ?>
					<?php
					}
					?>	
				</table>
			</div>
		</main>
	</div>
</div>