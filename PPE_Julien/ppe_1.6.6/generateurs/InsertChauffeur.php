<?php
//connection base de donnee
include ('connect.php');


$nom = file("nom.txt");
$prenom = file("garcon.txt");

for ($i=0;$i<100;$i++)
{
	$tel = array("06",rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9),rand(0,9));
	$tel = implode("",$tel);
	$mail = $prenom.$nom."@gmail.com";
	$mail = implode("",$mail)

	$connexion->exec("INSERT INTO CHAUFFEUR(CHFID, CHFNOM, CHFPRENOM, CHFTEL, CHFMAIL) VALUES ($i,'$nom[$i]',$prenom[$i],$tel[$i],$mail[$i]);");

}


$reponse->closeCursor(); // Termine le traitement de la requête

?>
