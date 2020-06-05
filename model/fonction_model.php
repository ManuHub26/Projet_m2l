<?php

require("../controler/fonctions.php");


/**
 *fonction qui retourne les informations de l'utilisateur
 *@param int $id id de l'utilisateur
 *@param array $rep tableau qui recoit les données de la requête
 *@return array
*/

function select_compte($id)
{
    $rep=connectdb()->query(
        "SELECT nom,prenom,dateNaissance,num_adresse,adresse_rue,cp,UPPER(ville),email,mdp FROM utilisateur
        WHERE idUtilisateur='$id'"
    );

    return $rep;
}


/**
 *fonction qui retourne la salle choisie en fonction des critères de l'utilisateur
 *@param string $nomsport nom du sport choisi par l'utilisateur
 *@param string $nomville nom de la ville choisi par l'utilisateur
 *@param array $res tableau qui recoit les données de la requête 
 *@return array  
*/

function select_salle($nomsport,$nomville)
{
   $res = connectdb()->query(
    "SELECT salle.libelle,imageSalle,salle.idSalle FROM pratique_sport
    INNER JOIN sport ON sport.idSport=pratique_sport.idSport
    INNER JOIN salle ON salle.idSalle=pratique_sport.idSalle
    INNER JOIN gymnase ON gymnase.idGymnase=salle.idGymnase
    INNER JOIN ville ON gymnase.idVille=ville.idVille
    WHERE sport.nom='$nomsport' AND ville.nom='$nomville'"
    );

    return $res;
}

/**
 *fonction qui retourne toutes les informations de la salle demandée
 *@param int $idsalle id de la salle
 *@param array $res tableau qui contient les données de la requête
 *@return array 
*/

function salle_choix($idsalle)
{
    $res = connectdb()->query(
        "SELECT salle.libelle,imageSalle,gymnase.nom,gymnase.num_adresse,gymnase.adresse_rue,gymnase.cp,UPPER(ville.nom),salle.prix FROM salle
         INNER JOIN gymnase ON gymnase.idGymnase=salle.idGymnase
         INNER JOIN ville ON gymnase.idVille=ville.idVille
         WHERE salle.idSalle='$idsalle'"
    );

    return $res;
}
?>