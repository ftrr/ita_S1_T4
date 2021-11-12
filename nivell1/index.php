<?php

class Employee {

    //Atributs
    private $nom;
    private $sou;

    //Mètodes
    public function initialize($nom, $sou){
        $this->nom=$nom;
        $this->sou=$sou;
    }

    public function print(){
        echo $this->nom . ". ";
        if($this->sou>6000){
            echo "Ha de pagar impostos.";
        }
    }
}

$empleat1 = new Employee();
$empleat1 -> initialize('Joan',30000);
$empleat1 -> print();