<!DOCTYPE html>
<html lang='fr'>

<head>

	<meta charset='utf-8'/>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel="icon" type="image/png" href="https://upload.wikimedia.org/wikipedia/commons/3/32/Sword_Icon.png" />
	<title>Gate-Weapon</title>
	<link rel='stylesheet' href='views/bootstrap.css'>
	<link rel='stylesheet' href='views/style.css'>
	<link rel="stylesheet" href="views/owl.carousel.css">

</head>
<body>

	<header>
		<div class='container-fluid'>
			<div class='row'>
				<div>

					<ul class="menu col-xs-12 ">
						<li class='col-sm-2'>
							<a href='index.php' >GATE-WEAPON</a>
						</li>

						<li class='col-sm-2'> 
							<a href='index.php?c=articles&a=list'>ARTICLES</a> 
						</li>
					
						<li class='col-sm-2'> 
							<a href='#'>LICENCES</a> 
							<ul>
								<?php
									require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
									$controller_licence = new Controller_Article();
									$listLicence = $controller_licence->listLicence();
									
									foreach($listLicence as $licence) {
										echo '<li><a href="index.php?c=articles&id='.$licence['id_licence'].'&a=list&t=licence"> <img src="'.$licence['imageURL'].'" class="header__image">'.$licence['nom'].'<img src="'.$licence['imageURL'].'" class="header__image"> </a></li>';
									}

								?>
							</ul>
						</li>

						<li class='col-sm-2'> 
							<a href='#'>CATEGORIES</a> 
							<ul>
								<?php
									require_once($_SERVER['DOCUMENT_ROOT']).'boutique/controllers/article.php';
									$controller_categorie = new Controller_Article();
									$listCategorie = $controller_categorie->listCategorie();
									
									foreach($listCategorie as $categorie) {
										echo '<li><a href="index.php?c=articles&id='.$categorie['id_categorie'].'&a=list&t=categorie"> <img src="'.$categorie['imageURL'].'" class="header__image"> '.$categorie['nom'].' <img src="'.$categorie['imageURL'].'" class="header__image"> </a></li>';
									}

								?>
							</ul>
						</li>

						<?php if(isset($_SESSION['id_users'])) { 
								if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0) {
							echo "<li class='col-sm-1'> <a href='#'> UTILISATEUR </a>";
						} else {
							echo "<li class='col-sm-2'> <a href='#'> UTILISATEUR </a>";
						}
							?>
								<ul>
									<li> <a href='index.php?c=profil&a=view'>Profil</a></li>
									<li> <a href='index.php?c=users&a=view'>Liste Utilisateurs</a></li>
									<li> <a href='index.php?c=deconnexion&a=out'>Deconnexion</a></li>
								</ul>
							</li>
						<?php
						}else {
							echo "<li class='col-sm-2'> <a href='index.php?c=connexion&a=in'>CONNEXION</a>";
						}
						?>
							<ul>
								<li> <a href= 'index.php?c=connexion&a=in'> Connexion </a> </li>
								<li> <a href= 'index.php?c=inscription&a=add'> Inscription </a> </li>
							</ul>
						</li>					
					
						<?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 0) {
						echo ' <li class="col-sm-1"> 
							<a href="index.php?c=panier&a=show">PANIER</a>
							<ul>
								<li></li>
							</ul>';
						}
						?>
						 <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {
							echo '<li class="col-sm-2"><a href="admin/index.php"> ADMINISTRATION </a>
									<ul>
										<li></li>
										<li></li>
									</ul>
								</li>';
						} else { ?> 
						<li class='col-sm-2'> 
							<a href='contact'>CONTACT</a>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
			
		</div>
	</header>
	<div class='bloc_principal'>