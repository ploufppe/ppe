<?php
	include "connect_switch.php";
	//echo "Insertion de donnees: <br />";
	$connexion = mysql_select_db($dbname)
	or die("Impossible d'ouvrir la base : ".mysql_error());
	//echo 'Base selectionnee... <br />';
	$ID=$_GET['id'];
	$sql="DELETE FROM connexion WHERE id='".$ID."'";
	//echo "Execution de la requête <br />";
	
	$result = mysql_query($sql);
//or die ("Requete invalide : ".mysql_error());
if ($result)
		echo "<meta http-equiv='refresh' content='0;url=create_user.php'>";
	else
		echo "<meta http-equiv='refresh' content='0;url=create_user.php
				message=' Requete invalide'>";

?>