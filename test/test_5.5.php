<?php

require_once 'Joueur.php' ;
require_once 'JoueurControleur.php' ;



//.		[SIMULÉ]
//.		recupérer un joueur 
//.		new Joueur ("Joueur4" , 500) ;
$joueur = new Joueur ("Joueur4" , 500) ;

$joueurVue = new JoueurVue () ;


$controleur = new JoueurControleur ($joueur , $joueurVue) ;

$controleur -> updateVue () ;

//.		ajout de 100€
//.		
$controleur -> setCash ($controleur -> getCash () + 100);

$controleur -> updateVue () ;



//.		>  php ./test/test_5.5.php
//.		 —— FICHE JOUEUR —— 
//.		| Nom  : Joueur4
//.		| Cash : 500 €
//.		 ———————————————— 
//.		 —— FICHE JOUEUR —— 
//.		| Nom  : Joueur4
//.		| Cash : 600 €
//.		 ———————————————— 



?>