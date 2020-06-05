<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../vue/m2l_style.css">
    <script type="text/javascript" src="../vue/codejs.js"></script>
</head>

<body>

<?php include("../vue/head.php");?>

<center>
         <h2>Connexion</h2>

         <div class="mess_alert">
             <?php if(isset($_GET["mess_b"])) echo "VOTRE COMPTE À ETAIT CREER AVEC SUCCES CONNECTEZ-VOUS MAINTENANT
             AFIN D'ACCEDER AUX RESERVATIONS,";
             if(isset($_GET["mess_alert"])) echo "ERREUR REMPLISSEZ BIEN TOUT LES CHAMPS";
             if (isset($_GET["mess_c"])) echo "CONNECTEZ-VOUS POUR ACCEDER A VOS COORDONNEES";?>
        </div>


         <p>Connectez-vous afin d'accéder aux reservations</p> 
            <form action="../model/recup.php" method="post" class="form_c">
                <label for="pseudo">E-mail: </label>
                <input type="text" name="emailCon" id ="pseudo"><br><br>

                <label for="mdp">Mot de passe: </label>
                <input type="password" name="mdpCon" id ="mdp"><br><br>

                <input class="button" type="submit" value="Connexion">
            </form>

    <p>Pas encore inscrit ? <a href="../vue/inscription.php">Cliquez ici</a></p>
</center>
        
<?php include("../vue/footer.php");?>

</body>
</html>
