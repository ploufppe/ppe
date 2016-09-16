<?php
//connection base de donnee
include ('connect.php');
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM CHAUFFEUR');

// On affiche chaque entrée une à une
while ($CHAUFFEUR = $reponse->fetch())
{
 // echo $CHAUFFEUR['CHFNOM'];
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>