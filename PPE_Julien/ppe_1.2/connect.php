<?php
try
{
	$bdd = new PDO('mysql:host=185.35.64.91;dbname=appliChauffeur;charset=utf8', 'root', 'Tyzdel2510');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>