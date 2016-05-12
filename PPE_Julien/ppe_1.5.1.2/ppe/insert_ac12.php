<?php
	include "connectAD.php";
	//echo "Insertion de donnees: <br />";
	$connexion = mysql_select_db($dbname)
	or die("Impossible d'ouvrir la base : ".mysql_error());
	//echo 'Base selectionnee... <br />';
	//on recupere les donnees 
	$VEHIMMAT=$_GET['VEHIMMAT'];
	$CHFID=$_GET['CHFID'];
	$TRNCOMMENTAIRE=$_GET['TRNCOMMENTAIRE'];
	$TRNDTE=$_GET['TRNDTE'];
	$TRNPECCHAUFFEUR=$_GET['TRNPECCHAUFFEUR'];
	

	//creation de la requete d'insertion des donnees
	$sql="INSERT INTO `tournee`( `VEHIMMAT`, `CHFID`, `TRNDTE`, `TRNCOMMENTAIRE`, `TRNPECCHAUFFEUR` ) VALUES ('$VEHIMMAT','$CHFID', '$TRNDTE', '$TRNCOMMENTAIRE', '$TRNPECCHAUFFEUR')";
	
	echo "Execution de la requete <br />";
	echo $sql;
	echo $CHFID;
	$result = executeSQL($sql);
// if ($result)
// 		echo "<meta http-equiv='refresh' content='0;url=create_user.php'>";
// 	else
// 		echo "<meta http-equiv='refresh' content='0;url=create_user.php
// 				message=' Requete invalide'>"

?>