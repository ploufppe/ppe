<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=appliChauffeur;charset=utf8', 'root', 'Tyzdel2510');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>