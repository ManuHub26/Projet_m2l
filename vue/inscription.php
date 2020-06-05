<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../vue/m2l_style.css">
	<script type="text/javascript" src="../vue/codejs.js"></script>
</head>

<body>
	<?php include("../vue/head.php");?>
	
	
	<center>
		<h2>Inscription</h2>
		
		<div class="mess_alert">
			<?php if(isset($_GET["mess_erreur"]))echo "ERREUR REMPLISSEZ BIEN TOUT LES CHAMPS";?>
			<?php if(isset($_GET["mess_email"]))echo "L'ADRESSE E-M@IL RENTRÉE EST DÉJÀ UTLISÉE";?>
		</div>

			<form action="../model/recup.php" method="post" class='form_i'>
			
				<label for="nom">Nom: </label>
				<input type="text" name="nom"><br><br>
				
				<label for="prenom">Prénom: </label>
				<input type="text" name="prenom"><br><br>

				<label for="dateNaiss">Date de Naissance: </label>
				<input type="date" name="dateNaiss"><br><br>

				<label for="num_adresse">Numéro adresse: </label>
				<input type="text" name="num_adresse"><br><br>

				<label for="adresse">Adresse: </label>
				<input type="text" name="adresse"><br><br>

				<label for="cp">Code Postale: </label>
				<input type="text" name="cp"><br><br>

				<label for="ville">Ville: </label>
				<input type="text" name="ville"><br><br>

				<label for="email">E-mail: </label>
				<input type="email" name="email"><br><br>

				<label for="mdp">Mot de Passe: </label>
				<input type="password" name="mdp"><br><br>

				<input type="submit" class="button" value="S'inscrire">
				
			</form>
   </center>

   <?php include("../vue/footer.php");?>

</body>
</html>