<?php
	include "..\connectAD.php";
	//on recupere les donnees 
	$TRNNUM=$_GET['TRNNUM'];
	$ETPID=$_GET['ETPID'];
	$LIEUID=$_GET['lieu'];
	$HREMIN=$_GET['hreMin'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$HREMAX=$_GET['hreMax'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$ETPFIN=$_GET['etpFin'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$ETPCOM=$_GET['commentaire'];
	//creation de la requete d'insertion des donnees
	if(verificationHorraire($hreMin, $hreMax, $etpFin)==false){
		echo "<meta http-equiv='refresh' content='0;url=ac13.php?message=<font color=red>Veuillez remplir de manière correcte le formulaire.</font>'>";
	}
	else{
	$sql="UPDATE `etape` SET `LIEUID`='$LIEUID',`ETPHREMIN`='$HREMIN',`ETPHREMAX`='$HREMAX',`ETPHREFIN`='$ETPFIN',`ETPCOMMENTAIRE`='$ETPCOM' 
	WHERE `ETPID`='$ETPID'
	AND `TRNNUM`='$TRNNUM'";
	
	echo "Execution de la requete <br />";
	$result = executeSQL($sql);
	if ($result)
		echo "<meta http-equiv='refresh' content='0;url=..\ac12update.php?TRNNUM=".$TRNNUM."'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=..\ac12update.php
				message=' Requete invalide'>";
	}
?>