<?php

require_once 'Joueur.php' ;

class JoueurControleur {
    private $modele ;
    private $vue ;

    public function __construct ($modele , $vue) {
        $this -> modele = $modele ;
        $this -> vue = $vue ;
    }
	
    public function setPrenom ($prenom) {
        $this -> modele -> setPrenom ($prenom) ;
    }

    public function getPrenom () {
        return $this -> modele -> getPrenom () ;
    }

    public function setCash ($cash) {
        $this -> modele -> setCash ($cash) ;
    }

    public function getCash () {
        return $this -> modele -> getCash () ;
    }
	
    public function updateVue () {
        $this -> vue -> afficherFicheJoueur (
            $this -> modele -> getPrenom () , 
            $this -> modele -> getCash ()
        ) ;
    }
}