<?php
//fonction pour inclure la connection
include 'connect.php';

//Pour les plaques d'immatriculations
include "lettreImmat.php";
	
//indentifiant de la BD
	$connexion = new PDO('mysql:host=localhost;dbname=appliChauffeur;charset=utf8', 'root', 'Tyzdel2510');

//boucle pour lire toutes les case
	
for ($i=0;$i<100;$i++){
	//Creation de plaque d'immatriculation Random
	//Pour les lettres de la plaque
	$lettre1 = lettreImmat();
	$lettre2 = lettreImmat();
	$lettre3 = lettreImmat();
	$lettre4 = lettreImmat();
	
	$plaque = array($lettre1,$lettre2,rand(0,9),rand(0,9),rand(0,9),$lettre3,$lettre4);
	$plaque = implode("",$plaque);
	
	//partant du principe qu'il n'y a que 4 types de vehicules chez MESGUEN
	$choixVehicule = rand(0,3);
	
	if ($choixVehicule==0){
	 $vehiculeNom = "RENAULT_MIDLUM";
	}
	elseif ($choixVehicule==1){
	 $vehiculeNom = "RENAULT_KERAX";
	}
	elseif ($choixVehicule==2){
	 $vehiculeNom = "MAN_TGX";
	}
	elseif ($choixVehicule==3){
	 $vehiculeNom = "MERCEDES_AXOR";
	}
	//Par défaut :
	else {
	$vehiculeNom = "RENAULT_MIDLUM";
	}

	//affichage de ce qui va etre rentrée
	echo ($i."||".$plaque."||".$vehiculeNom."</br> ");
	
	
	//on envoi les infos sur la bdd  
	$connexion->exec("INSERT INTO VEHICULE(VEHIMMAT, VEHNOM) VALUES (\"$plaque\", \"$vehiculeNom\");"); 
	
	}

	
?>