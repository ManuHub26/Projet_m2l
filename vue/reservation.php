<!DOCTYPE html>
<html>
<head>
	<title>Accueil Réservation</title>
	<meta charset='utf-8'>
	<link rel='stylesheet' href="../vue/m2l_style.css">
</head>

<body>
    
    
<?php

include("../vue/head.php");
include("../vue/footer.php");
require("../controler/fonctions.php");

?>

<center class='reser_acc'>

<p>
	<?php if(isset($_GET['mess_bv']))
	{
		$idutilisateur=$_SESSION["idutilisateur"];
		$sql=connectdb()->query("SELECT prenom FROM utilisateur WHERE idUtilisateur='$idutilisateur'");
		$res=$sql->fetch();
		echo "Bonjour ".$res['prenom']."<br>";
	}
	?>
	<p>Pour accéder au salle de sport disponible dans votre ville veuillez selectionnez vos options ci-dessous:</p>
	<br>	<form action="select_salle.php" method="post" class="form_s">
				<label>Ville:</label>		
					<select name="nom_ville" class="option_select">
						<option value="paris">Paris</option>
						<option value="marseille">Marseille</option>
						<option value="lyon">Lyon</option>
						<option value="grenoble">Grenoble</option>
						<option value="lille">Lille</option>							
						<option value="nice">Nice</option>
						<option value="caen">Caen</option>
						<option value="bordeaux">Bordeaux</option>
						<option value="toulouse">Toulouse</option>
					</select>

	<br><br>
			<label>Sport:</label> 
					<select name="nom_sport" class="option_select">
						<option value="football">Football</option>
						<option value="volleyball">Volleyball</option>
						<option value="basket">Basketball</option>
						<option value="handball">Handball</option>
						<option value="tennis">Tennis</option>
						<option value="tennis de table">Tennis de Table</option>							
						<option value="badminton">Badminton</option>
						<option value="judo">Judo</option>
						<option value="karate">Karate</option>
						<option value="krav maga">Krav Maga</option>
						<option value="boxe anglaise">Boxe anglaise</option>
						<option value="natation">Natation</option>
					</select>
	<br><br> <input type="submit" class="button" value="Envoyer">
		    </form>


</center>
		
			
	
</body>
</html>