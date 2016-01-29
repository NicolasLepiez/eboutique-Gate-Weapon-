<div class='container-fluid'>
	<div class='row'>

		<main class='col-xs-12 main__only'>
		
			<div class='table-responsive'>
				<table class='table table-bordered'>
					<tr>
						<th class='table__title'> MINIATURE </th>
						<th class='table__title'> PSEUDO </th>
						<th class='table__title'> ADMIN </th>
						<th class='table__title'> EMAIL </th>
						<th class='table__title'> ACTION </th>
					</tr>

					<?php 
					foreach ($listUsers as $list) {
						
						if ($list['admin'] == 1) {
							$is_admin = 'oui';
						} else {
							$is_admin = 'non';
						}

						?> 
						<?= '<tr>
								<td> <img src="'.$list['image_profil'].'" class="table__image"></td>
								<td>'.$list['pseudo'].'</td>
								<td>'.$is_admin.'</td>
								<td>'.$list['email'].'</td>
								<td> <a href="index.php?c=users&a=particular&id='.$list['id_users'].'" class="table__link"> Voir profil </a>

							</tr>'; ?>
					<?php
					}
					?>	
				</table>
			</div>
		</main>
	</div>
</div>