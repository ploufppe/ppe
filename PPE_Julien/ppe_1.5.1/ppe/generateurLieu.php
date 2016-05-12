<?php
//fonction pour inclure la connection
include 'connect.php';
	
//indentifiant de la BD
	$connexion = new PDO('mysql:host=localhost;dbname=appliChauffeur;charset=utf8', 'root', 'Tyzdel2510');
	
	//on ouvre les fichiers  dans un tableau
	$lieuT = file('./generateurLieu.txt');
	$communes = file('./ville.txt');
	//boucle pour lire toutes les case
	
for ($i=0;$i<100;$i++){

	//on recupére la case de du tableau pour les tests 
	$lieu = array($lieuT[rand(0,93)], $lieuT[rand(0,93)]);
	$lieu = implode("-",$lieu);
	echo ($i."||".$lieu."||".$communes[$i]."</br> ");
	
	
	//on envoi les infos de $ligne sur la bdd  
	$connexion->exec("INSERT INTO LIEU(LIEUID, VILID, LIEUNOM, LIEUCOORDGPS) VALUES ($i,\"$communes[$i]\", \"$lieu\", "lol");"); 
	
	}

	

?>