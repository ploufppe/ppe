<?php
	include "..\connectAD.php";
	//on recupere les donnees 
	$ETPID=$_GET['etpid'];
	$LIEUID=$_GET['lieu'];
	$HREMIN=$_GET['hreMin'];
	$HREMAX=$_GET['hreMax'];
	$ETPFIN=$_GET['etpFin'];
	$ETPCOM=$_GET['commentaire'];
	//creation de la requete d'insertion des donnees
	$sql="UPDATE `etape` SET `LIEUID`='$LIEUID',`ETPHREMIN`='$HREMIN',`ETPHREMAX`='$HREMAX',`ETPHREFIN`='$ETPFIN',`ETPCOMMENTAIRE`='$ETPCOM' WHERE `ETPID`='$ETPID'";
	
	echo "Execution de la requete <br />";
	$result = executeSQL($sql);
if ($result)
		echo "<meta http-equiv='refresh' content='0;url=..\ac12.php'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=..\ac12.php
				message=' Requete invalide'>"

?>