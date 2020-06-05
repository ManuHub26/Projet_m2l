<?php

/** 
 * fonction qui se connecte a la base de données
 * @param object $db de type PDO qui récupère l'accés a la base
 * @return retourne cette variable
*/
function connectdb()
{
    $db = new PDO('mysql:host=localhost;dbname=reservation_m2l;','root','');

    return $db;
}


function verifHeure($date,$heure,$salle)
{
    $res = connectdb()->query("SELECT * FROM reservation 
    WHERE dateReservation = '$date' 
    AND idTranche = (SELECT idTranche FROM trancheshoraires 
                     WHERE trancheshoraires = '$heure')
    AND idSalle = '$salle'");

    return $res;
}


?>