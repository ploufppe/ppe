<?php

include("connect.php");

$id = 4;
$nom = "GROJEAN";
$prenom = "Jean";
$tel = "0123456789";
$mail = "JeanGroJean@grosmail.fr";
$gps="";






$req = $bdd->prepare('INSERT INTO CHAUFFEUR(CHFID, CHFNOM, CHFPRENOM, CHFTEL, CHFMAIL, CHFCOORDGPS) VALUES(:id, :nom, :prenom, :tel, :mail, :gps)');
$req->execute(array(
	'id' => $id,
	'nom' => $nom,
	'prenom' => $prenom,
	'tel' => $tel,
	'mail' => $mail,
	'gps' => $gps
	));

echo 'Nouveau chauffeur ajout&eacute; avec succ&egrave;s.';
?>