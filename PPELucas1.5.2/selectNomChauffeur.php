<?php

include ('connect.php');

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM CHAUFFEUR');

// On affiche chaque entrée une à une
while ($CHAUFFEUR = $reponse->fetch())
{
?>
    <p>
    <strong>Chauffeur</strong> : <?php echo $CHAUFFEUR['CHFNOM']; ?><br />
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>