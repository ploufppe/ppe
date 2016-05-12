<?php
//fonction pour inclure la connection
include 'connect.php';
	
//indentifiant de la BD
	$connexion = new PDO('mysql:host=localhost;dbname=appliChauffeur;charset=utf8', 'root', 'Tyzdel2510');
	
	//on ouvre les fichiers  dans un tableau
	$nomgarcon = file('./garcon.txt');
	$nom = file('./nom.txt');

	//boucle pour lire toutes les case
	
for ($i=0;$i<100;$i++){
	$tel = array("06",rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9));
	$tel = implode("",$tel);
	//creation de la fausse address mail 
	$mail = array($nomgarcon.$nom[$i]."@MESGUEN.bzh");
	$mail = implode("",$mail);
	//on recupére la case de du tableau pour les tests 
	echo ($i."||".$nomgarcon[$i]."||".$nom[$i]."||".$tel."||".$mail."||"."</br> ");
	
	
	//on envoi les infos de $ligne sur la bdd  
	$connexion->exec("INSERT INTO CHAUFFEUR(CHFID,CHFNOM,CHFPRENOM,CHFTEL,CHFMAIL) VALUES ($i,\"$nom[$i]\",\"$nomgarcon[$i]\",\"$tel\",\"$mail\");"); 
	}

	

?>