<?php
	include "..\connectAD.php";
	//echo 'Base selectionnee... <br />';
	//on recupere les donnees 
	$VEHIMMAT=$_GET['VEHIMMAT'];
	$CHFID=$_GET['CHFID'];
	$TRNCOMMENTAIRE=$_GET['TRNCOMMENTAIRE'];
	$TRNDTE=$_GET['TRNDTE'];
	$TRNPECCHAUFFEUR=date('Y-m-d H:i:s');
	

	//creation de la requete d'insertion des donnees
	$sql="INSERT INTO `tournee`( `VEHIMMAT`, `CHFID`, `TRNDTE`, `TRNCOMMENTAIRE`, `TRNPECCHAUFFEUR` ) VALUES ('$VEHIMMAT','$CHFID', '$TRNDTE', '$TRNCOMMENTAIRE', '$TRNPECCHAUFFEUR')";
	
	echo "Execution de la requete <br />";
	echo $sql;
	$result = executeSQL($sql);
if ($result)
		echo "<meta http-equiv='refresh' content='0;url=..\ac11.php'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=..\ac11.php
				message=' Requete invalide'>"

?>