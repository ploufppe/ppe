<?php
	include "..\connectAD.php";
	//echo 'Base selectionnee... <br />';
	//on recupere les donnees 
	$TRNNUM=$_GET['TRNNUM'];
	$VEHIMMAT=$_GET['VEHIMMAT'];
	$CHFID=$_GET['CHFID'];
	$TRNCOMMENTAIRE=$_GET['TRNCOMMENTAIRE'];
	$TRNDTE=$_GET['TRNDTE'];
	$TRNPECCHAUFFEUR=date('Y-m-d H:i:s');
	

	//creation de la requete d'insertion des donnees
	$sql="update `tournee` 
	SET `VEHIMMAT`='$VEHIMMAT', `CHFID`='$CHFID', `TRNDTE`='$TRNDTE', `TRNCOMMENTAIRE`='$TRNCOMMENTAIRE', `TRNPECCHAUFFEUR`='$TRNPECCHAUFFEUR'
	WHERE `TRNNUM`=$TRNNUM";
	
	echo "Execution de la requete <br />";
	echo $sql;
	$result = executeSQL($sql);
if ($result)
		echo "<meta http-equiv='refresh' content='0;url=..\ac11.php'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=..\ac11.php
				message=' Requete invalide'>"

?>