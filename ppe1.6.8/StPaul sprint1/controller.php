<?php 

//connect
require 'Model.php';

$sejours = $bdd->query('select * from sejour order by sejno');

//display
require 'View.php';

?>