<?php
	include "..\connectAD.php";
	//on recupere les donnees 
	$TRNNUM=$_GET['TRNNUM'];
	$ETPID=$_GET['ETPID'];

	
	$ETPDEB=$_GET['dateDeb']."T".$_GET['hreDeb'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$ETPFIN=$_GET['dateFin']."T".$_GET['hreFin'].":00.000000"; //Permet la convertion au format datetime de la BDD
	
	$PALLIV=$_GET['palLiv'];
	$PALLIVEUR=$_GET['palLivEur'];
	$PALCHG=$_GET['palChg'];
	$PALCHGEUR=$_GET['palChgEur'];
	
	$cheque=$_GET['cheque'];
	$KM=$_GET['kilometre'];
	$etat=$_GET['etat'];
	
	$ETPCOM=$_GET['commentaire'];
	//creation de la requete d'insertion des donnees
	if($ETPDEB > $ETPFIN){
		echo "<meta http-equiv='refresh' content='0;url=..\ac43.php?TRNNUM=".$TRNNUM."&id=".$ETPID."&message=<font color=red>Veuillez saisir une date d arrivee inferieure a la date de depart.</font>'>";
	}
	elseif ($PALLIV < $PALLIVEUR){
		echo "<meta http-equiv='refresh' content='0;url=..\ac43.php?TRNNUM=".$TRNNUM."&id=".$ETPID."&message=<font color=red>Le nombre de palettes Europe livrees doit etre inferieure ou egale au nombre de palettes livrees total.</font>'>";
	}
	elseif ($PALCHG < $PALCHGEUR){
		echo "<meta http-equiv='refresh' content='0;url=..\ac43.php?TRNNUM=".$TRNNUM."&id=".$ETPID."&message=<font color=red>Le nombre de palettes Europe chargees doit etre inferieure ou egale au nombre de palettes chargees total.</font>'>";
	}
	else{
	$sql="UPDATE `etape` SET `ETPHREDEBUT`='$ETPDEB',`ETPHREFIN`='$ETPFIN', `ETPNBPALLIV`=$PALLIV,`ETPNBPALLIVEUR`=$PALLIVEUR,`ETPNBPALCHARG`=$PALCHG,`ETPNBPALCHARGEUR`=$PALCHGEUR, `ETPNBPALRECU`=$cheque,`ETPETATLIV`='$etat',`ETPCOMMENTAIRE`='$ETPCOM' ,`ETPKM`='$KM'
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