<?php

//fonction pour inclure la connection
include 'connect.php';


function char($text)
{
	$text = htmlentities($text, ENT_NOQUOTES, "UTF-8");
	$text = htmlspecialchars_decode($text);
	return $text;
}

// function stripAccentsUtf8($string)
// {
// $string = mb_strtolower($string, 'UTF-8');
// $string = str_replace(
// array(
// 'à', 'â', 'ä', 'á', 'ã', 'å',
// 'î', 'ï', 'ì', 'í',
// 'ô', 'ö', 'ò', 'ó', 'õ', 'ø',
// 'ù', 'û', 'ü', 'ú',
// 'é', 'è', 'ê', 'ë',
// 'ç', 'ÿ', 'ñ',
// ),
// array(
// 'a', 'a', 'a', 'a', 'a', 'a',
// 'i', 'i', 'i', 'i',
// 'o', 'o', 'o', 'o', 'o', 'o',
// 'u', 'u', 'u', 'u',
// 'e', 'e', 'e', 'e',
// 'c', 'y', 'n',
// ),
// $string
// );

// return $string;
// }
	
	
//indentifiant de la BD
	$connexion = new PDO('mysql:host=localhost;dbname=appli_chf;charset=utf8', 'root', '');
	
	//on ouvre les fichiers  dans un tableau
	$communes = file('./ville.txt');


	//boucle pour lire toutes les case
	
for ($i=0;$i<100;$i++){

	//on recupére la case de du tableau pour les tests 
	echo char($i."||".$communes[$i]."</br> ");
	
	
	//on envoi les infos de $ligne sur la bdd  
	$connexion->exec("INSERT INTO COMMUNE(VILID, VILNOM) VALUES ($i, \"$communes[$i]\");"); 
	
	}

	

?>