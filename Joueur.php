<?php

class Joueur {
    private $prenom ;
    private $cash ;

    public function __construct ($prenom , $cash) {
        $this -> prenom = $prenom ;
        $this -> cash = $cash ;
    }


	//.		GETTER / SETTER
	//.		
    public function getPrenom () { return $this -> prenom ; }
    public function setPrenom ($prenom) { $this -> prenom = $prenom ; }

    public function getCash () { return $this -> cash ; }
    public function setCash ($cash) { $this -> cash = $cash ; }

}

class JoueurVue {
    public function afficherFicheJoueur ($prenom , $cash) {
        print (" —— FICHE JOUEUR —— \n") ;
        print ("| Nom  : " . $prenom . "\n") ;
        print ("| Cash : " . $cash . " €\n") ;
        print (" ———————————————— \n") ;
    }
}

interface JoueurDao {
    public function getTousLesJoueurs () ;
    public function addJoueur ($joueur) ;
    public function updateJoueur ($joueur) ;
    public function deleteJoueur ($joueur) ;

}






?>