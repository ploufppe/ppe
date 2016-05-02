<?php
	require "connectSwitch.php";
	require "AccesDonneesV2.php";
	
	//recupération des variables
	$lieu = $_GET['lieu'];
	$calendrierRdvDebut = $_GET['calendrierRdvDebut'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$calendrierRdvFin = $_GET['calendrierRdvFin'].":00.000000"; //Permet la convertion au format datetime de la BDD
	$commentaire = $_GET['commentaire'];  
	$trnNum = 1;	// A MODIFIER <--

/*	if(verificationHorraire($calendrierRdvDebut, $calendrierRdvFin)==false){
		echo "<meta http-equiv='refresh' content='0;url=ac13.php?message=<font color=red>Veuillez remplir de manière correcte le formulaire.</font>'>";
	}
	else{
*/	
	//recuperation du plus grand ETPID pour la tournée en question :
		$sql="select ETPID from etape where TRNNUM = 1; ";
		echo $sql."<br/>";
		$etpid = compteSQL($sql);

		echo "etpid = $etpid<br />";
		$etpid+=1;
	echo "<br/>".$etpid."<br/>";

	//requete de remplissage de la table etape (partie AC13, donc incomplete) :
		$sql= "INSERT INTO etape(`TRNNUM`, `ETPID`, `LIEUID`, `ETPHREMIN`, `ETPHREMAX`, `ETPCOMMENTAIRE`) 
				VALUES ($trnNum, $etpid , $lieu ,' $calendrierRdvDebut ',' $calendrierRdvFin ',' $commentaire ');";

		$result= executeSQL($sql);

//redirection vers la page de creation de tournée :
		$handle = fopen("requete.txt", "a");
		fwrite($handle, $requete);
		fclose($handle);

		echo "<meta http-equiv='refresh' content='0;url=ac13.php?message=<font color=green>Requete effectuée avec succès </font>'>";

//	}
?>