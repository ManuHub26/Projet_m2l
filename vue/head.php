<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="m2l_style.css">
</head>

<body>

	<nav>
		<ul id="menu">
			<li><a href="accueil.php">À propos M2L</a> 
				<ul class="deroulant">
					<li><a href="stat_jurid.php">Statut Juridique</a></li>
					<li><a href="locaux.php">Locaux</a></li>
					<li><a href="personnel.php">personnel</a></li>
					<li><a href="materiel.php">matériel</a></li>
					<li><a href="services.php">services</a></li>
				</ul>	
			</li>
			<li><a href="les_ligues.php">Les Ligues</a>
				<ul class="deroulant">
					<li><a href="formations.php">Formations</a></li>
				</ul>  
			</li>		
			<li><a href="connexion.php">Réservation</a></li>
			<li><a href='../vue/compte.php'>Mon Compte</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
	</nav>
</body>
</html>