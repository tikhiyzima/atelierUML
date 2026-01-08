<?php

class Banque {
    private static $instance = null ;
    private $cash ;

    private function __construct () {
        $this -> cash = 0 ;
    }

    public static function getInstance () {
        if (self::$instance === null) {
            self::$instance = new Banque () ;
        }
        return self::$instance ;
    }


	
	//.		GETTER / SETTER
	//.		
    public function getCash () { return $this -> cash ; }
    public function setCash ($montant) { $this -> cash = $montant ; }
}


?>