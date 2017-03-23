<?php
include "connectAD.php";


echo "<br /><br />TEST  AfficheTable<hr/>";
$sql = "SELECT `TRNNUM`, `VEHIMMAT`, `CHFID`, `TRNDTE`, `TRNPECCHAUFFEUR`, `TRNARCHAUFFEUR`, `TRNCOMMENTAIRE` FROM tournee ORDER BY TRNNUM";
$result = tableSQL($sql);



//echo "Version base : ".versionBase();

/*$results = tableSQL($sql);
 var_dump($results);
 foreach ($results as $ligne) {
 //on extrait chaque valeur de la ligne courante
 $login = $ligne['macolonne'];
 $password = $ligne[0];

 echo $login." ".$password."<br />";
 }
 */

/*	echo "<br /><br /> TEST typeChamp<hr />";
 $sql = "select * from EMP";
 $result = typeChamp($sql,0);
 echo $result."<br />";
 $result = typeChamp($sql,1);
 echo $result."<br />";
 $result = typeChamp($sql,2);
 echo $result."<br />";
 $result = typeChamp($sql,3);
 echo $result."<br />";
 $result = typeChamp($sql,4);
 echo $result."<br />";

 /*	echo "<br /><br /> TEST compteSQL<hr />";
 $sql = "select * from emp";
 $result = compteSQL($sql);
 echo $result;

 echo "<br /><br /> TEST champSQL<hr />";
 $sql = "select count(*) from emp";
 $result = champSQL($sql);
 echo $result;

 echo "<br /><br /> TEST nombreChamp<hr />";
 $sql = "select * from emp";
 $result = nombreChamp($sql);
 echo $result;

 echo "<br /><br /> TEST nomChamp<hr />";
 $sql = "select * from emp";
 $result = nomChamp($sql,0);
 echo $result;







 //echo $result;
 /*
 echo "<br /><br /><br /> TEST version 5.6.15-log <hr />";

 echo  versionMYSQL();

 */
//exportBase();

//dump();

//import();

//afficheRequeteSQL($sql);




deconnexion();


?>