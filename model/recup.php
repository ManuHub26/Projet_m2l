<?php

session_start();


require("../controler/fonctions.php");

    if(isset($_POST["nom"]) || isset($_POST["prenom"]) || isset($_POST["dateNaiss"]) || 
       isset($_POST["adresse"])|| isset($_POST["num_adresse"]) || isset($_POST["cp"]) ||
       isset($_POST["ville"]) || isset($_POST["email"]) ||isset($_POST["mdp"]))
       {
        if($_POST["nom"]=="" || $_POST["prenom"]=="" || $_POST["dateNaiss"]=="" || 
        $_POST["adresse"]==""|| $_POST["num_adresse"]=="" ||$_POST["cp"]=="" ||
        $_POST["ville"]==""||$_POST["email"]=="" ||$_POST["mdp"]=="" )
        { 
            header("Location:../vue/inscription.php?mess_erreur");
        }
                 else 
                     {
                     $req = connectdb()->prepare("INSERT INTO utilisateur(nom,prenom,dateNaissance,adresse_rue,num_adresse,cp,ville,email,mdp)
                     VALUES(:nom,:prenom,:dateNaiss,:adresseRue,:numeroAdresse,:cp,:ville,:email,:mdp)");


                     $req->execute(array(
                         "nom"=>$_POST["nom"],
                         "prenom"=>$_POST["prenom"],
                         "dateNaiss"=>$_POST["dateNaiss"],
                         "adresseRue"=>$_POST["adresse"],
                         "numeroAdresse"=>$_POST["num_adresse"],
                         "cp"=>$_POST["cp"],
                         "ville"=>$_POST["ville"],
                         "email"=>$_POST["email"],
                         "mdp"=>$_POST["mdp"]
                     ));

                     header("Location:../vue/connexion.php?mess_b");
                     
                     
                     }
       }


        if(isset($_POST['emailCon']) || isset($_POST['mdpCon']))
        {
            if($_POST['emailCon']=="" || $_POST['mdpCon']=="" )
                  {
                      header("Location:../vue/connexion.php?mess_alert");
                  }
                  else {
                    $email=$_POST["emailCon"];
                    $mdp=$_POST["mdpCon"];
                    $sql=connectdb()->query("SELECT * FROM utilisateur WHERE email='$email'AND mdp='$mdp'");
                                    if ($req=$sql->fetch())
                                    {
                                     $_SESSION['idutilisateur'] = $req['idUtilisateur'];
                                     header("Location:../vue/reservation.php?mess_bv");	
                                    }
                  }
        }   


        if(isset($_POST["dateReser"]) || isset($_POST["nbPersonne"]))
        {
            if($_POST["dateReser"]=="" || $_POST["nbPersonne"]=="")
            {
                header("Location:../vue/confirm_salle.php?mess_b");
            }
            else {
                $res = verifHeure($_POST["dateReser"],$_POST["trancheHoraire"],$_SESSION['idsalle']);
                $donnees = $res->fetch();
                if($donnees == true) 
                    {
                        $_SESSION['dateReser'] = $_POST["dateReser"];
                        $_SESSION['nbPersonne'] = $_POST["nbPersonne"];
                        $_SESSION['trancheHoraire'] = $_POST["trancheHoraire"];
                        header("Location:../vue/confirm_salle.php?mess_v");    
                    }
                else {
                    $_SESSION['dateReser'] = $_POST["dateReser"];
                    $_SESSION['nbPersonne'] = $_POST["nbPersonne"];
                    $_SESSION['trancheHoraire'] = $_POST["trancheHoraire"];
                    header("Location:../vue/valid_salle.php");          
                    }
            }

        }

?>