<?php

require_once 'Joueur.php' ;

class JoueurDaoImpl implements JoueurDao {
    private $joueurs = [] ;

    public function __construct () {
		//.		joueurs pré-enregistrés 
		//.		
        $this -> joueurs [] = new Joueur ("Joueur1" , 100) ;
        $this -> joueurs [] = new Joueur ("Joueur2" , 100) ;
        $this -> joueurs [] = new Joueur ("Joueur3" , 100) ;
    }

    public function getTousLesJoueurs () {
        return $this -> joueurs ;
    }

    public function addJoueur ($joueur) {
        array_push ($this -> joueurs , $joueur) ;
    }

    public function updateJoueur ($joueur) {
        //.		enregistrer les modifs sur le joueur en "locale"
		//.		sur BDD 
		
		//.		aucun script ducoup car pas de BDD 
		//.		
	}

    public function deleteJoueur ($joueur) {
        $key = array_search ($joueur , $this -> joueurs) ;
        if ($key !== false) {
            unset ($this -> joueurs [$key]) ;
            $this -> joueurs = array_values ($this -> joueurs) ;

        }
    }
}




?>