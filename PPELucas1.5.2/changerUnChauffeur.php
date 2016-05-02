<?php

include("connect.php");

$nom = "GROSJEAN";
$prenom = "Ptit-Jean";
$id = 4;


$req = $bdd->prepare('UPDATE CHAUFFEUR SET CHFNOM = :nom, CHFPRENOM = :prenom  WHERE CHFID = :id');
$req->execute(array(
	'nom' => $nom,
	'prenom' => $prenom,
	'id' => $id
	));

echo 'Chauffeur modifi&eacute;.';
?>