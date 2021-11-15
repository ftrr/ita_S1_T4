<?php

echo "<br><br><b>Exercici 1</b><br>";

class PokerDice {

    //Properties
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


$dau1 = new PokerDice();
$dau1 -> shapeName();
$dau2 = new PokerDice();
$dau2 -> shapeName();
$dau3 = new PokerDice();
$dau3 -> shapeName();
$dau4 = new PokerDice();
$dau4 -> shapeName();
$dau5 = new PokerDice();
$dau5 -> shapeName();

echo PokerDice::getTotalThrows();


