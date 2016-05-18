<?php
	require "connectAD.php";

	
	//recupération des variables
	$trnNum = $_GET['TRNNUM'];
	$lieu = $_GET['lieu'];
	$hreMin = $_GET['hreMin'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$hreMax = $_GET['hreMax'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$etpFin = $_GET['etpFin'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$commentaire = $_GET['commentaire'];  


	if(verificationHorraire($hreMin, $hreMax, $etpFin, "ac13", $trnNum)==false){
		/*echo "<meta http-equiv='refresh' content='0;url=ac13.php?message=<font color=red>Formulaire rempli de manière incorrecte.</font>'>";*/
	}
	else{
	
	//recuperation du plus grand ETPID pour la tournée en question :
		$sql="select ETPID from etape where TRNNUM = ".$trnNum."; ";
		echo $sql."<br/>";
		$etpid = compteSQL($sql);

		echo "etpid = $etpid<br />";
		$etpid+=1;
	echo "<br/>".$etpid."<br/>";

	//requete de remplissage de la table etape (partie AC13, donc incomplete) :
		$sql= "INSERT INTO etape(`TRNNUM`, `ETPID`, `LIEUID`, `ETPHREMIN`, `ETPHREMAX`, `ETPHREFIN`, `ETPCOMMENTAIRE`) 
				VALUES ($trnNum, $etpid , $lieu ,' $hreMin ',' $hreMax ', ' $etpFin ', ' $commentaire ');";

		$result= executeSQL($sql);

//redirection vers la page de creation de tournée :
		echo "<meta http-equiv='refresh' content='0;url=ac12.php?TRNNUM=".$trnNum."'>";

	}
?>