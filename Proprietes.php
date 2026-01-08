<?php

abstract class Propriete {
    protected string $nom ;
    protected int $prix ;

    public function __construct ($nom , $prix) {
        $this -> nom = $nom ;
        $this -> prix = $prix ;
    }

    public function afficher () {
        print ("type : " . get_class ($this) . " | nom : " . $this -> nom . " | prix : " . $this -> prix . "€\n") ;
		
    }
	


	//.		GETTER / SETTER
	//.		
    public function getNom () { return $this -> nom ; }
    public function getPrix () { return $this -> prix ; }
}


//.		ProduitX : Terrain | Gare | CompagnieEE
//.		
class Terrain extends Propriete { }
class Gare extends Propriete { }
class CompagnieEE extends Propriete { }



?>