<?php

require_once 'Proprietes.php' ;

class ProprieteFactory {
    public function creer ($type , $nom , $prix) {
        switch ($type) {
            case 'terrain' :
                return new Terrain ($nom , $prix) ;
                break ;
            case 'gare' :
                return new Gare ($nom , $prix) ;
                break ;
            case 'compagnie' :
                return new CompagnieEE ($nom , $prix) ;
                break ;
            default:
                print ("type de propriété inconnu : " . $type) ;
        }
    }
}


?>