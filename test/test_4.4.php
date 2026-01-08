<?php

require_once 'JoueurDaoImpl.php' ;


$dao = new JoueurDaoImpl () ;


$listeJoueurs = $dao -> getTousLesJoueurs () ;

//.		ajouter 100€ à chaque joueur 
//.		
foreach ($listeJoueurs as $joueur) {
    $ancienSolde = $joueur -> getCash () ;
    $joueur -> setCash ($ancienSolde + 100) ;
    
    $dao -> updateJoueur ($joueur) ;
}


//.		supprimer un joueur 
//.		
$dao -> deleteJoueur ($listeJoueurs [0]) ;


//.		afficher tous les users 
//.		
foreach ($dao -> getTousLesJoueurs () as $joueur) {
    print ($joueur -> getPrenom () . " : " . $joueur -> getCash () . "€\n") ;

}


//.		> php ./test/test_4.4.php
//.		Joueur2 : 200€
//.		Joueur3 : 200€



?>