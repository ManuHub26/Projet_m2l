<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="m2l_style.css">
</head>

<body>

<?php

require("head.php");
require("../model/fonction_model.php");

?>
<div class="compte">
    

    <?php

    if(isset($_SESSION['idutilisateur']) )
    {
        echo "<h3>Vos Informations</h3>";

        $req=select_compte($_SESSION["idutilisateur"]);
    
        while($compte=$req->fetch())
        {
        echo "Prénom : ".$compte["prenom"]."<br> Nom : ".$compte["nom"]."<br>";
        echo "Adresse : ".$compte["num_adresse"]." ".$compte["adresse_rue"]." ".$compte["cp"]." ".
        $compte["UPPER(ville)"]."<br>";
        echo "E-m@il : ".$compte["email"]."<br>";
        echo "Mot de Passe : ".$compte["mdp"];
        }   
    
}
    else{
        echo "<p> Vous n'êtes pas connecté.</p> </br>
        <a href='connexion.php'> Cliquez-ici pour vous connecter.</a>";
    }

    ?>

</div>    


</body>
</html>