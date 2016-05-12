<?php
	include "AccesDonnees.php";

	$ip=explode(".",$_SERVER['SERVER_ADDR']);

	switch ($ip[0]) {

		case 127 :
		case 192 :
		//local
			$host = "127.0.0.1";
			$user = "root";
			$password = "";
			$dbname = "applichauffeur";
			$port='80';
			break;
			
			
		default :
			exit ("Serveur non reconnu...");
			break;
	}

	$connexion=connexion($host,$port,$dbname,$user,$password);
	
	if (!$connexion) {
		echo "Connexion non reussie<br />";
		echo "Host : $host:$port <br />";
		echo "User : $user<br />";
		echo "Base $dbname non selectionnee... <br />";
		echo "Mode acces : $modeacces<br />";
		exit;
	}

	
?>

