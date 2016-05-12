<?php
$heure = date("H:i");
if (date("m") ==1)
{
	$date= date("d")." Janvier ".date("Y");
}
elseif (date("m") ==2)
{
	$date= date("d")." F&eacute;vrier ".date("Y");
}
elseif (date("m") ==3)
{
	$date= date("d")." Mars ".date("Y");
}
elseif (date("m") ==4)
{
	$date= date("d")." Avril ".date("Y");
}
elseif (date("m") ==5)
{
	$date= date("d")." Mai ".date("Y");
}
elseif (date("m") ==6)
{
	$date= date("d")." Juin ".date("Y");
}
elseif (date("m") ==7)
{
	$date= date("d")." Juillet ".date("Y");
}
elseif (date("m") ==8)
{
	$date= date("d")." Aout ".date("Y");
}
elseif (date("m") ==9)
{
	$date= date("d")." Septembre ".date("Y");
}
elseif (date("m") ==10)
{
	$date= date("d")." Octobre ".date("Y");
}
elseif (date("m") ==11)
{
	$date= date("d")." Novembre ".date("Y");
}
elseif (date("m") ==12)
{
	$date= date("d")." D&eacute;cembre ".date("Y");
}
Print("$date - $heure");
?>