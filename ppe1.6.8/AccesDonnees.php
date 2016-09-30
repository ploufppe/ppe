<?php
/**
 *  Biblioth�que de fonctions AccesDonnees.php
 * revu by lucas & Julien
 *
 * 
 * @author Lucas, Julien
 * @copyright Estran
 * @version 3.1.1 du Vendredi 16 septembre 2016 
 *  - 
 * 	- Enregistrement des requetes SQL dans le fichier requetes.sql possible
 *  - Les requetes generant des erreurs sont automatiquement enregistrees
 * 
 */
///////////// CONFIGURATION DE L'ACCES AUX DONNEES ////////////////////
// nom du moteur d'acc�s � la base : mysql - mysqli
$modeacces = "mysql";
// enregistrement des logs de connexion : true - false
$logcnx = TRUE;
// enregistrement des requetes SQL : none - all - modif
$logsql = "all";
//////////////////////////////////////////////////////////////////////
$mysql_data_type_hash = array(
		1=>'tinyint',
		2=>'smallint',
		3=>'int',
		4=>'float',
		5=>'double',
		7=>'timestamp',
		8=>'bigint',
		9=>'mediumint',
		10=>'date',
		11=>'time',
		12=>'datetime',
		13=>'year',
		16=>'bit',
		//252 is currently mapped to all text and blob types (MySQL 5.0.51a)
		252=>'blob',
		253=>'varchar',
		254=>'string',
		246=>'decimal'
);
/**
 * 
 * Ouvre une connexion � un serveur MySQL et s�lectionne une base de donn�es.
 * @param host string
 *  <p>Adresse du serveur MySQL.</p>
 * @param port integer
 *  <p>Num�ro du port du serveur MySQL.</p>
 * @param dbname string
 *  <p>Nom de la base de donnees.</p>
 * @param user string
 *  <p>Nom de l'utilisateur.</p>
 * @param password string
 *  <p>Mot de passe de l'utilisateur.</p>
 * 
 * @return Retourne l'identifiant de connexion MySQL en cas de succ�s 
 *         ou FALSE si une erreur survient.
 */
function connexion($host,$port,$dbname,$user,$password) {

	global $modeacces, $logcnx, $connexion;



	if ($modeacces=="mysql") {
			
		@$link = mysql_connect("$host:$port", "$user", "$password");

		if (!$link) {
			$chaine = "Connexion PB - ".date("j M Y - G:i:s - ").$user." - ". mysql_error()."\r\n";
			$connexion = FALSE;
		} else {
			@$connexion = mysql_select_db("$dbname");
			if (!$connexion) {
				$chaine = "Selection base PB - ".date("j M Y - G:i:s - ").$user." - ". mysql_error()."\r\n";
				$connexion = FALSE;
			} else {
				$chaine = "Connexion OK - ".date("j M Y - G:i:s - ").$user."\r\n";
			}
		}

	}


	if ($modeacces=="mysqli") {

		@$connexion = new mysqli("$host", "$user", "$password", "$dbname", $port);

		if ($connexion->connect_error) {
			$chaine = "Connexion PB - ".date("j M Y - G:i:s - ").$user." - ". $connexion->connect_error."\r\n";
			$connexion = FALSE;
		} else {
			$chaine = "Connexion OK - ".date("j M Y - G:i:s - ").$user."\r\n";
		}

	}

	/*  TEST CNX PDO
	 *
	 */
	if ($modeacces=="pdo") {
		// ceation du Data Source Name, ou DSN, qui contient les infos
		// requises pour se connecter � la base.
		$dsn='mysql:host='.$host.';port='.$port.';dbname='.$dbname;

		try
		{
			$connexion = new PDO($dsn, $user, $password);
		}

		catch(Exception $e)
		{
			/*echo 'Erreur : '.$e->getMessage().'<br />';
			 echo 'N� : '.$e->getCode();
			 die();*/
			$chaine = "Connexion PB - ".date("j M Y - G:i:s - ").$user." - ". $e->getCode() . " - ". $e->getMessage()."\r\n";
			$connexion = FALSE;
		}

		if ($connexion) {
			$chaine = "Connexion OK - ".date("j M Y - G:i:s - ").$user."\r\n";
		}

	}

	if ($logcnx) {
		//Formatage de la date pour le dichier log.txt
		$handle=fopen("log.txt","a");
		fwrite($handle,$chaine);
		fclose($handle);
	} else {
		echo $chaine."<br />";
	}
	return $connexion;

}
	
	if ($modeacces=="mysqli") {
		
		@$connexion = new mysqli("$host", "$user", "$password", "$dbname", $port);
		if ($connexion->connect_error) {
			
			$chaine = "Connexion PB - ".date("j M Y - G:i:s - ").$user." - ". $connexion->connect_error."\r\n";
			$connexion = FALSE;
			
		} else {
			
			 $chaine = "Connexion OK - ".date("j M Y - G:i:s - ").$user."\r\n";
			 
		}
		
		if ($logcnx)
			ecritFichierLog($chaine);
		else
			echo $chaine."<br />";		
		
		return $connexion;
	}
function ecritFichierLog($uneChaine) {
	$handle=fopen("log.txt","a");
		fwrite($handle,$uneChaine);
	fclose($handle);
}
/**
 *
 * Ferme la connexion MySQL.
 *
 */
function deconnexion() {
	
	global $modeacces, $connexion;
	if ($modeacces=="mysql") {
		mysql_close();
	}
	if ($modeacces=="mysqli") {
		$connexion->close();
	}
}
/**
 *
 *Envoie une requ�te � un serveur MySQL.
 * @param sql string
 *  <p>Requete SQL.</p>
 *
 *
 * @return  Pour les requ�tes du type SELECT, SHOW, DESCRIBE, EXPLAIN et 
 *          les autres requ�tes retournant un jeu de r�sultats, mysql_query() 
 *          retournera une ressource en cas de succ�s, ou FALSE en cas d'erreur.
 *          
 *          Pour les autres types de requ�tes, INSERT, UPDATE, DELETE, DROP, etc., 
 *          mysql_query() retourne TRUE en cas de succ�s ou FALSE en cas d'erreur. 
 */
function executeSQL($sql) {

	global $modeacces, $connexion, $logsql;
	
	//Formatage de la date pour le dichier log.txt
	$uneChaine = date("j M Y - G:i:s --> ").$sql."\r\n";
	
	if ($logsql=="all") {
	
		ecritRequeteSQL($uneChaine);
	
	} else {
	
		if ($logsql=="modif") {
	
			$mot=strtolower(substr($sql,0, 6));
			if ($mot=="insert" || $mot=="update") {
				ecritRequeteSQL($uneChaine);
			}
	
		}
	
	}

	if ($modeacces=="mysql") {
		$result = mysql_query($sql)		
		or die (afficheErreur($sql, mysql_error()));		

	}

	if ($modeacces=="mysqli") {
		$result = $connexion->query($sql)	
		//or die (afficheErreur($sql, mysqli_error_list($connexion)[0]['error']));
		or die (afficheErreur($sql, $connexion->error_list[0]['error']));
				

	}
	if ($modeacces=="pdo"){
		$result = $connexion->exec($sql);
	}
	
	return $result;
}
function afficheErreur($sql, $erreur) {
	
	//Formatage de la date pour le dichier log.txt
	$uneChaine = "ERREUR SQL : ".date("j M Y - G:i:s.u --> ").$sql." : ($erreur) \r\n";
	
	ecritRequeteSQL($uneChaine);
	
	return "Erreur SQL de <b>".$_SERVER["SCRIPT_NAME"].
	       "</b>.<br />Dans le fichier : ".__FILE__.
	       " a la ligne : ".__LINE__.
	       "<br />".$erreur.
			"<br /><br /><b>REQUETE SQL : </b>$sql<br />";
	
}
function ecritRequeteSQL($uneChaine) {
	$handle=fopen("requete.sql","a");
		fwrite($handle,$uneChaine);
	fclose($handle);
}
/**
 *
 *Retourne le nombre de lignes d'une requete MySQL.
 * @param sql string
 *  <p>Requete SQL.</p>
 *
 *
 * @return Le nombre de lignes dans un jeu de r�sultats en cas de succ�s 
 *         ou FALSE si une erreur survient. 
 */
function compteSQL($sql) {
	global $modeacces, $connexion;
	
	$result = executeSQL($sql);
	if ($modeacces=="mysql") {
		$num_rows = mysql_num_rows($result);
		return $num_rows;
	}
	if ($modeacces=="mysqli") {
		$num_rows = $connexion->affected_rows;
		return $num_rows;
	}
	if ($modeacces=="PDO" or $modeacces=="pdo"){
	
		$num_rows = $connexion->affected_rows($sql);
		return $num_rows;
	}
}
/**
 *
 *Retourne un tableau r�sultat d'une requete MySQL.
 * @param sql string
 *  <p>Requete SQL.</p>
 *
 *
 * @return un tableau r�sultat de la requete MySQL.
 */
function tableSQL($sql) {
	global $modeacces, $connexion;
	
	$result = executeSQL($sql);
	$rows=array();
	if ($modeacces=="mysql") {
		while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
			array_push($rows,$row);
		}
		return $rows;
	}
	if ($modeacces=="mysqli") {
		while ($row = $result->fetch_array(MYSQLI_BOTH)) {
			array_push($rows,$row);
		}
		return $rows;
	}
}
/**
 *
 *Retourne un seul champ r�sultat d'une requete MySQL.
 * @param sql string
 *  <p>Requete SQL.</p>
 *
 *
 * @return une chaine r�sultat de la requete MySQL.
 */
function champSQL($sql) {
	global $modeacces, $connexion;
	
	$result = executeSQL($sql);
	
	if ($modeacces=="mysql") {
		$rows = mysql_fetch_array($result, MYSQL_NUM);
		return $rows[0];
	}
	if ($modeacces=="mysqli") {
		$rows = $result->fetch_array(MYSQLI_NUM);
		return $rows[0];
	}
}
/**
 *
 *Retourne le nombre de champs d'une requete MySQL
 * @param sql string
 *  <p>Requete SQL.</p>
 *
 *
 * @return Retourne le nombre de champs d'un jeu de r�sultat en cas de succ�s 
 *         ou FALSE si une erreur survient. 
 */
function nombrechamp($sql) {
	global $modeacces, $connexion;
	
	$result = executeSQL($sql);
	if ($modeacces=="mysql") {
		return mysql_num_fields($result);
	}
	if ($modeacces=="mysqli") {
		return  $result->field_count;
	}
}
/**
 *
 *Retourne le type d'une colonne MySQL sp�cifique
 * @param sql string
 *  <p>Requete SQL.</p>
 * @param field_offset integer
 *  <p>La position num�rique du champ. field_offset commence � 0. Si field_offset 
 *     n'existe pas, une alerte E_WARNING sera �galement g�n�r�e.</p>
 *
 *
 * @return Retourne le type du champ retourn� peut �tre : "int", "real", "string", "blob" 
 *         ou d'autres, comme d�taill� � dans la documentation MySQL.
 */
function typechamp($sql, $field_offset) {
	global $modeacces, $connexion, $mysql_data_type_hash;
	$result = executeSQL($sql);
	
	if ($modeacces=="mysql") {
		return mysql_field_type($result, $field_offset);
	}
	if ($modeacces=="mysqli") {
		return  $mysql_data_type_hash[$result->fetch_field_direct($field_offset)->type];	
	}
}

function verificationHorraire ($heure1, $heure2, $heure3, $uneRedirection, $TRNNUM){
	if ($heure1 <= $heure2 and ($heure3 <= $heure2 and $heure3 >= $heure1)){
		return True;
	}
	else
		if($heure1 >= $heure2){
			echo "<meta http-equiv='refresh' content='0;url=".$uneRedirection.".php?TRNNUM=".$TRNNUM."&message=<font color=red>Veuillez saisir une heure max sup�rieur � une heure min.</font>'>";
		}
		else
			echo "<meta http-equiv='refresh' content='0;url=".$uneRedirection.".php?TRNNUM=".$TRNNUM."&message=<font color=red>Veuillez saisir une heure de prise en charge, compris entre l heure min et l heure max.</font>'>";
		return False;
	
}

function nbspfct($unNombre){			
	while ($unNombre != 0){
		echo " &nbsp ";
		$unNombre-=1;
	}
}

?>