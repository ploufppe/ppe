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
		$dbname = "slam4";
		$port='3306';
		break;
			
	case 31 :
		//hostinger
		$host = "mysql.hostinger.fr";
		$user = "u627393142_user";
		$password = "P@ssword";
		$dbname = "u627393142_slam4";
		$port='3306';
		break;
			
	default :
		exit ("Serveur non reconnu...");
		break;
}
//connexion ORACLE
$host='10.0.220.13';    	// le chemin vers le serveur
$port='1521';				// 1521 port pour oracle 3306 pour mysql
$dbname='ORA13';  	    // le nom de votre base de données ou du service oracle
$user='sc_chauffeur';  			// nom d'utilisateur pour se connecter
$password='estran';          // mot de passe de l'utilisateur


$connexion=connexion($host,$port,$dbname,$user,$password);

if ($connexion) {
	echo "Connexion reussie<br />";
	echo "Host : $host:$port<br />";
	echo "Base $dbname selectionnee... <br />";
	echo "Utilisateur : $user<br />";
	echo "Mode acces : $modeacces<br />";
	echo "Type base : $typebase<hr />";
}
?>