<?php


interface MonIterator {
    public function hasNext () ; 
    public function next () ;
}

class PlateauIterator implements MonIterator {
    private $plateau ;
    private $index = 0 ;

    public function __construct($plateau) {
        $this->plateau = $plateau;
    }

    public function hasNext () {
        return $this -> index < $this -> plateau -> nbCases () ;
    }

    public function next () {
        $case = $this -> plateau -> getCase ($this -> index) ;
        $this -> index++ ;
        
        return $case ;
    }
}




?>