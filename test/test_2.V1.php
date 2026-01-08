<?php

require_once 'ProprieteFactory.php' ;


//.		VERSION CHOISIE : V1 
//.		


$usine = new ProprieteFactory () ;

//.		création du terrain
//.		
$t1 = $usine -> creer ('terrain' , 'Rue de la Paix' , 400) ;
$t1 -> afficher () ;

//.		création de la gare 
//.		
$g1 = $usine -> creer ('gare' , 'Gare Montparnasse' , 200) ;
$g1 -> afficher () ;


//.		RESULAT : 
//.		

//.		> php ./test/test_2.1.php
//.		type : Terrain | nom : Rue de la Paix | prix : 400€
//.		type : Gare | nom : Gare Montparnasse | prix : 200€


?>