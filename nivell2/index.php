<?php

echo "<br><br><b>Exercici 1</b><br>";

class PokerDice {

    //Atributs
    private $dau = array("1"=>"As","2"=>"K","3"=>"Q","4"=>"J","5"=>"8","6"=>"7");
    public static $tirada;


    //Mètodes
    public function throw(){
        $resultat = array_rand($this->dau); 
        PokerDice::$tirada = PokerDice::$tirada + 1;   
        return $this->dau[$resultat]."   ";     
    }

    public function shapeName(){
        echo $this->throw();
    }

    public static function getTotalThrows(){    
        echo "<br>Total tirades: " .PokerDice::$tirada;
    }

}


$dau = new PokerDice();
$dau -> shapeName();
$dau2 = clone $dau;
$dau2 -> shapeName();
$dau3 = clone $dau;
$dau3 -> shapeName();
$dau4 = clone $dau;
$dau4 -> shapeName();
$dau5 = clone $dau;
$dau5 -> shapeName();

echo PokerDice::getTotalThrows();


