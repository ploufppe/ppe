<?php
//fonction pour inclure la connection
include 'connect.php';
	
//indentifiant de la BD
	$connexion = new PDO('mysql:host=localhost;dbname=appliChauffeur;charset=utf8', 'root', 'Tyzdel2510');
	
	//on ouvre les fichiers  dans un tableau
	$communes = file('./ville.txt');


	//boucle pour lire toutes les case
	
for ($i=0;$i<100;$i++){

	//on recupére la case de du tableau pour les tests 
	echo ($i."||".$communes[$i]."</br> ");
	
	
	//on envoi les infos de $ligne sur la bdd  
	$connexion->exec("INSERT INTO COMMUNE(VILID, VILNOM) VALUES ($i, \"$communes[$i]\");"); 
	
	}

	

?>