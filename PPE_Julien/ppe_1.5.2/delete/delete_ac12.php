<?php
	include "..\connectAD.php";
	//echo 'Base selectionnee... <br />';
	//on recupere les donnees 
	$ETPID=$_GET['id'];

	//creation de la requete d'insertion des donnees
	$sql="DELETE FROM `etape` WHERE ETPID='$ETPID'";
	
	echo "Execution de la requete <br />";
	echo $sql;
	$result = executeSQL($sql);
if ($result)
		echo "<meta http-equiv='refresh' content='0;url=..\ac12.php'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=..\ac12.php'
				message=' Requete invalide'>"

?>