<?php
function ajoutLieu()
{
	require('connect.php');

	$requete=$bdd->query(  "SELECT 
								VILID
							FROM
								commune");

	$villes=$requete->fetchAll();

	$requete->closeCursor();

	$requete=$bdd->prepare("SELECT 
								LIEUID
							FROM
								LIEU
							WHERE
								LIEUID=:lieuId
								AND
								VILID=:ville
								AND
								LIEUNOM=:nom");

	$requeteSeconde=$bdd->prepare( "INSERT INTO LIEU
										(LIEUID,
										VILID,
										LIEUNOM)
									VALUES
										(:lieuId,
										:ville,
										:nom)");

	for($i=0; $i<100; $i++)
	{

		echo $lieuId=$i;

		echo $ville=$villes[rand(0, sizeof($villes)-1)]['VILID'];

		$lieuT = file('./generateurLieu.txt');
		$lieu = array(trim($lieuT[rand(0,93)]), trim($lieuT[rand(0,93)]));
		$lieu = implode("-", $lieu);

		echo $nom=$lieu;

		echo $gps=rand(0, 5000);

		echo "<br />";

		$requete->execute(array("lieuId"=>$lieuId, "ville"=>$ville, "nom"=>$nom));

		if($requete->fetch()==false)
		{
			$requeteSeconde->execute(array("lieuId"=>$lieuId, "ville"=>$ville, "nom"=>$nom));
		}
		else
		{
			$i--;
		}
	}

	$requete->closeCursor();
	$requeteSeconde->closeCursor();
}

ajoutLieu();

?>