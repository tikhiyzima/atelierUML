<?php

require_once 'Banque.php' ;

print ('création de la banque') ;

//.		instance 1 banque 
//.		
$b1 = Banque::getInstance () ;
$b1 -> setCash (1000) ;
print ("Cash b1 : " . $b1->getCash() . "\n") ;

//.		instance 2 banque ( normalement la même que b1 )
//.		
$b2 = Banque::getInstance () ;
$b2 -> setCash (500) ;
print ("Cash b2 : " . $b2 -> getCash () . "\n") ;

//.		si b1 -> getCash == b2 -> getCash
//.		-> OK
//.		
print ("Cash b1 : " . $b1 -> getCash () . "\n") ;

//.		
if ($b2 -> getCash () == $b1 -> getCash ()) {
	print ('OK') ;
}
else {
	print ('ERREUR : b2 n\'as pas la même instance que b1') ;
}


?>