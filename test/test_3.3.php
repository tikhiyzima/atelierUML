<?php

require_once 'Plateau.php';


$plateau = new Plateau () ;

$noms = [ 
	"Place du marché" , 
	"Helsinki" , 
	"Kuusamo" , 
	"Levi" , 
	"Kittila" ,
	"Narvik" ,
	"Riksgransen" ,
	"Kamchatka" ,
	"Svalbard" ,
	"Prison" ,
] ;
for ($i = 0 ; $i < count ($noms) ; $i++) {
    $plateau -> ajouterCase (new CaseDeJeu ($i + 1 , $noms [$i])) ;

}


$iterate = $plateau -> iterator () ;

while ($iterate -> hasNext ()) {
    $caseCourante = $iterate -> next () ;
    $caseCourante -> afficher () ;

}



//.		> php ./test/test_3.3.php
//.		case numéro 1 : Place du marché
//.		case numéro 2 : Helsinki
//.		case numéro 3 : Kuusamo
//.		case numéro 4 : Levi
//.		case numéro 5 : Kittila
//.		case numéro 6 : Narvik
//.		case numéro 7 : Riksgransen
//.		case numéro 8 : Kamchatka
//.		case numéro 9 : Svalbard
//.		case numéro 10 : Prison


?>