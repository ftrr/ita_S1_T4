<?php

echo "<br><br><b>Exercici 1</b><br>";

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
        }else{
            echo "No ha de pagar impostos.";
        }
    }
}

$empleat1 = new Employee();
$empleat1 -> initialize('Joan',3000);
$empleat1 -> print();


echo "<br><br><b>Exercici 2</b><br>";

class Shape{

    //Atributos
    protected $amplada;
    protected $altura;

    //Métodos
    public function __construct($amp,$alt){
        $this->amplada=$amp;
        $this->altura=$alt;
    }

    public function imprimir(){
        echo $this -> resultat . "<br>";
    }

}

class Triangle extends Shape{
    public function area(){
        $this->resultat = ($this->amplada*$this->altura)/2;
    }
}

class Rectangle extends Shape{
    public function area(){
        $this->resultat = $this->amplada*$this->altura;
    }
}

$triangle = new Triangle(10,20);
$triangle -> area();
echo "L'àrea del triangle és: ";
$triangle-> imprimir();

$rectangle = new Rectangle(20,20);
$rectangle -> area();
echo "L'àrea del rectangle és: ";
$rectangle-> imprimir();