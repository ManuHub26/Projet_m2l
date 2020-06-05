<!DOCTYPE html>
<html>
<head>
	<title>Salle</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../vue/m2l_style.css">
	<script type="text/javascript" src="../vue/codejs.js"></script>
</head>

<body>
	
<?php 
	include("../vue/head.php");
	include("../vue/footer.php");
    require("../model/fonction_model.php");
?>

<center>Sélectionnez la salle,</center>

<form class='salle_select' action="../vue/confirm_salle.php" method="post">	

        <?php

            $nomsport = $_POST["nom_sport"];
            $nomville= $_POST["nom_ville"];

            $_SESSION['idutilisateur'];
        
            $sql=select_salle($nomsport,$nomville);
        
            while($salle=$sql->fetch())
            {
                echo "<p>".$salle[0];
            ?> 
                <input type='radio' name='salle_choix' id='radio' value='<?php echo $salle[2];?>'>
                </p>
           
            <img width="30%" height="30%" src="<?php echo($salle['imageSalle']);?>">  
            
        <?php
            }
        ?>      
        
    <input class="button1" type="submit" value="Réserver cette salle">
		
</form>
			
			 


    















</body>
</html>