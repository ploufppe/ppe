<?php
	include "..\connectAD.php";
	//echo 'Base selectionnee... <br />';
	//on recupere les donnees 
	$TRNNUM=$_GET['id'];

	//creation de la requete d'insertion des donnees
	$sql="DELETE FROM `tournee` WHERE TRNNUM='$TRNNUM'";
	
	echo "Execution de la requete <br />";
	echo $sql;
	$result = executeSQL($sql);
if ($result)
		echo "<meta http-equiv='refresh' content='0;url=..\ac11.php'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=..\ac11.php'
				message=' Requete invalide'>"

?>