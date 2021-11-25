<?php

echo "<br><br><b>Exercici 1</b><br>";

class PokerDice {

    //Atributs
    private $dau = array("1"=>"As","2"=>"K","3"=>"Q","4"=>"J","5"=>"8","6"=>"7");
    public static $tirada;
    public $figura=0;


    //Mètodes

    public function throw(){
        //return rand(1,6);
        $this->figura = rand(1,6);
        PokerDice::$tirada = PokerDice::$tirada + 1;
        
    }

    public function shapeName(){
        echo $this->dau[$this->figura]."   ";
        return $this->dau[$this->figura]."   ";
    }

    public static function getTotalThrows(){    
        echo "<br>Total tirades: " .PokerDice::$tirada;
    }

}


$dau = new PokerDice();
$dau -> throw();
$dau -> shapeName();

$dau2 = new PokerDice();
$dau2 -> throw();
$dau2 -> shapeName();

$dau3 = new PokerDice();
$dau3 -> throw();
$dau3 -> shapeName();

$dau4 = new PokerDice();
$dau4 -> throw();
$dau4 -> shapeName();

$dau5 = new PokerDice();
$dau5 -> throw();
$dau5 -> shapeName();

echo PokerDice::getTotalThrows();


