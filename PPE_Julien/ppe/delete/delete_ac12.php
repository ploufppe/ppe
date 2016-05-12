<?php
	include "..\connect_switch.php";
	//echo "Insertion de donnees: <br />";
	$connexion = mysql_select_db($dbname)
	or die("Impossible d'ouvrir la base : ".mysql_error());
	//echo 'Base selectionnee... <br />';
	//on recupere les donnees 
	$ETPID=$_GET['ETPID'];
	//creation de la requete d'insertion des donnees
	$sql="DELETE * FROM etape WHERE ETPID='$ETPID'";
	
	echo "Execution de la requete <br />";
	echo $sql;
	echo $ETPID;
	$result = mysql_query($sql) or die ("Requete invalide : ".$sql."==>".mysql_error());
// if ($result)
// 		echo "<meta http-equiv='refresh' content='0;url=create_user.php'>";
// 	else
// 		echo "<meta http-equiv='refresh' content='0;url=create_user.php
// 				message=' Requete invalide'>"

?>