<?php

function SelectChauffeur()
{
//connection base de donnee
include ('connectAD.php');

$requete=$bdd->query(  "SELECT 
								CHFNOM
							FROM
								CHAUFFEUR");

// On affiche chaque entrée une à une
while ($CHAUFFEUR = $requete->fetch())
{
?>
    <p>
    <strong>Chauffeur Numero</strong> : <?php echo $CHAUFFEUR['CHFID']; ?><br />
    <strong>Chauffeur nom</strong> : <?php echo $CHAUFFEUR['CHFNOM']; ?><br />
    <strong>Chauffeur prenom</strong> : <?php echo $CHAUFFEUR['CHFPRENOM']; ?><br />
    </p>

<?php
}

$requete->closeCursor(); // Termine le traitement de la requête

}

?>