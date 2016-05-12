<?php
//connection base de donnee
include ('connect.php');
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM CHAUFFEUR');

// On affiche chaque entrée une à une
while ($CHAUFFEUR = $reponse->fetch())
{
?>
    <p>
    <strong>Chauffeur</strong> : <?php echo $CHAUFFEUR['CHFID']; ?><br />
    </p>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>