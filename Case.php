<?php

//.		classe "Case" renommée en "CaseDeJeu" 
//.		imspossible de l'appeler "Case" car mot clef reservé 
//.		 


class CaseDeJeu {
    private $numero ;
    private $nom ;

    public function __construct ($numero , $nom) {
        $this -> numero = $numero ;
        $this -> nom = $nom ;
    }

    public function afficher () {
        print ("case numéro " . $this -> numero . " : " . $this -> nom . "\n") ;
	}
}


?>