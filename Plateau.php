<?php

require_once 'PlateauIterator.php' ;
require_once 'Case.php' ;

interface MonAggregate {
    public function iterator () ;
}

class Plateau implements MonAggregate {
    private $cases = [] ;

    public function ajouterCase (CaseDeJeu $c) {
        $this -> cases [] = $c ;
    }
	
    public function getCase ($i) {
        return $this -> cases [$i] ;
    }

    public function nbCases () {
        return count ($this -> cases) ;
    }

    public function iterator () {
        return new PlateauIterator ($this) ;
    }
}




?>