
<!DOCTYPE html>
<html lang='fr'>

<head>

	<meta charset='utf-8'/>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel="icon" type="image/png" href="/Sword_Icone.png" />
	<title>Gate-Weapon</title>
	<link rel='stylesheet' href='views/bootstrap.css'>
	<link rel='stylesheet' href='views/style.css'>

</head>
<body>

	<header>
		<div class='container-fluid'>
			<div class='row'>
				<div class='col-xs-12 col-sm-2'>
					<img src='https://upload.wikimedia.org/wikipedia/commons/3/32/Sword_Icon.png' alt='icone'>
				</div>
				<div class='col-xs-12 col-sm-10 nav__background'>
					<a href='index.php' class='nav__button'>ACCUEIL</a>
					<a href='#' class='nav__button'>LICENCES</a>
					<a href='#' class='nav__button'>CATEGORIES</a>
	
	
					<?php if(isset($_SESSION['id_users'])) {
						$connect = 'DECONNEXION'; 
						echo "<a href='index.php?c=deconnexion&a=out' class='nav__button'>";
					}else {
						$connect = 'CONNEXION'; 
						echo "<a href='index.php?c=connexion&a=enter' class='nav__button'>"; 
					} 
					echo $connect ?></a>

					<a href='#' class='nav__button'>PANIER</a>
					<a href='#' class='nav__button'>CONTACT</a>
				</div>
			</div>
		</div>
	</header>
