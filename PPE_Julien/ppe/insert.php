<?php
	include "connect_switch.php";
	//echo "Insertion de donnees: <br />";
	$connexion = mysql_select_db($dbname)
	or die("Impossible d'ouvrir la base : ".mysql_error());
	//echo 'Base selectionnee... <br />';
	$NOM=$_GET['nom'];
	$PRENOM=$_GET['prenom'];
	$LOGIN=$_GET['login'];
	$MDP=$_GET['mdp'];
	
	$sql="INSERT INTO connexion(nom,prenom,login, mdp) VALUES ('".$NOM."','".$PRENOM."','".$LOGIN."','".md5($MDP)."')";
	//echo "Execution de la requête <br />";
	
	$result = mysql_query($sql);
//or die ("Requete invalide : ".mysql_error());
if ($result)
		echo "<meta http-equiv='refresh' content='0;url=create_user.php'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=create_user.php
				message=' Requete invalide'>";

?>