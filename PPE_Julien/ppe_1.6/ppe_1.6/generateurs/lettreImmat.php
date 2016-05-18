<?php

function lettreImmat() {

$rangLettre = rand(0,25);

switch ($rangLettre) {

	case 0 :
		$lettre = "A";
		break;

	case 1 :
		$lettre = "B";
		break;
		
	case 2 :
		$lettre = "C";
		break;
		
	case 3 :
		$lettre = "D";
		break;
		
	case 4 :
		$lettre = "E";
		break;
		
	case 5 :
		$lettre = "F";
		break;
		
	case 6 :
		$lettre = "G";
		break;
		
	case 7 :
		$lettre = "H";
		break;
		
	case 8 :
		$lettre = "I";
		break;
		
	case 9 :
		$lettre = "J";
		break;
		
	case 10 :
		$lettre = "K";
		break;
		
	case 11 :
		$lettre = "L";
		break;
		
	case 12 :
		$lettre = "M";
		break;
		
	case 13 :
		$lettre = "N";
		break;
		
	case 14 :
		$lettre = "O";
		break;
		
	case 15 :
		$lettre = "P";
		break;
		
	case 16 :
		$lettre = "Q";
		break;
		
	case 17 :
		$lettre = "R";
		break;
		
	case 18 :
		$lettre = "S";
		break;
		
	case 19 :
		$lettre = "T";
		break;
		
	case 20 :
		$lettre = "U";
		break;
		
	case 21 :
		$lettre = "V";
		break;
		
	case 22 :
		$lettre = "W";
		break;
		
	case 23 :
		$lettre = "X";
		break;
		
	case 24 :
		$lettre = "Y";
		break;
		
	case 25 :
		$lettre = "Z";
		break;

	default :
		$lettre = "A";
		break;
}
	

return $lettre;

}


?>