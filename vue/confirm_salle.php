<!DOCTYPE html>
<html>
<head>
	<title>Confirmation Réservation</title>
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


<?php

if(isset($_POST['salle_choix']))
    {
        $_SESSION['idsalle'] = $_POST['salle_choix'];
       
        $req = salle_choix($_SESSION['idsalle']);
    
        while ($salle=$req->fetch()) {
            echo "Vous avez sélectionné la ".$salle[0]." <br>";
            echo "Gymnase : ".$salle[2].", ".$salle[3]." "
            .$salle[4]." ".$salle[5]." ".$salle[6]."<br>";
            echo "Le prix de la salle est de ".
            $salle[7]." €, par personne.";
               }
     
             } 
             
             if(isset($_GET['mess_b']))
             {
              $req=salle_choix($_SESSION['idsalle']);
    
                while ($salle=$req->fetch()) {
                    echo "Vous avez sélectionné la ".$salle[0]." <br>";
                    echo "Gymnase : ".$salle[2].", ".$salle[3]." "
                    .$salle[4]." ".$salle[5]." ".$salle[6]."<br>";
                    echo "Le prix de la salle est de ".
                    $salle[7]." €, par personne.";
                }           
             } 
             if(isset($_GET['mess_v']))
             {
              $req=salle_choix($_SESSION['idsalle']);
    
                while ($salle=$req->fetch()) {
                    echo "Vous avez sélectionné la ".$salle[0]." <br>";
                    echo "Gymnase : ".$salle[2].", ".$salle[3]." "
                    .$salle[4]." ".$salle[5]." ".$salle[6]."<br>";
                    echo "Le prix de la salle est de ".
                    $salle[7]." €, par personne.";
                }           
             }  
?>
    <center>
        <div class="mess_alert">
            <?php if(isset($_GET['mess_b'])) echo "REMPLISSEZ BIEN TOUT LES CHAMPS";?>
            <?php if(isset($_GET['mess_v'])) echo "L'HEURE QUE VOUS AVEZ SÉLECTIONNEZ EST DÉJÀ RÉSERVÉE, 
            SÉLECTIONNEZ UNE AUTRE HEURE, ";?>
        </div>
        <p>Remplissez les informations suivantes pour votre réservation : </p></br>
         <form class='form_conf' action='../model/recup.php' method='post'>

           <label for='dateRes'>Date de réservation  : </label>
           <input type='date' name='dateReser' id='dateRes'></br></br>  

           <label for='nbPersonne'>Nombres de personnes : </label>
           <input type='text' name='nbPersonne' id='nbPersonne'></br></br>


           <label> Tranche Horaire : </label>
           <select name="trancheHoraire" class="option_select">
						<option value="10h-11h">10h-11h</option>
						<option value="10h-12h">10h-12h</option>
						<option value="11h-12h">11h-12h</option>
						<option value="11h-13h">11h-13h</option>
						<option value="12h-13h">12h-13h</option>							
						<option value="12h-14h">12h-14h</option>
						<option value="13h-14h">13h-14h</option>
						<option value="13h-15h">13h-15h</option>
						<option value="14h-15h">14h-15h</option>
                        <option value="14h-16h">14h-16h</option>
						<option value="15h-16h">15h-16h</option>
						<option value="15h-17h">15h-17h</option>
						<option value="16h-17h">16h-17h</option>
						<option value="16h-18h">16h-18h</option>							
						<option value="17h-18h">17h-18h</option>
		   </select> </br></br>

           <input type='submit' value="Envoyer">

        </form>
     </center>
</body>
</html>