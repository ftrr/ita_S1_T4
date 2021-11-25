<?php

class Account {

    //Atributs
    protected $numCompte;
    protected $nom;
    protected $cognoms;
    protected $saldo;

    //Mètodes

    public function __construct($num,$name,$surname,$sal){
        $this->numCompte = $num;
        $this->nom = $name;
        $this->cognoms = $surname;
        $this->saldo = $sal;
    }

    public function getNumCompte(){
        return $this->numCompte;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getCognoms(){
        return $this->cognoms;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        return $this->saldo = $saldo;
    }

    

    public function deposit(int $valor){
        $this->saldo = $this->saldo+$valor;
        $this->setSaldo($this->saldo);
        echo "S'han ingressat: " . $valor . "€. <br>";
        echo "Saldo actual: " .$this->getSaldo() . "€. <br>";
    }

    public function withdraw(int $valor){
        
        if($this->saldo>=$valor){
            $this->saldo = $this->saldo-$valor;
            $this->setSaldo($this->saldo);
            echo "S'han retirat: " . $valor . "€. <br>";
            echo "Saldo actual: " . $this->getSaldo() . "€. <br>";
        }else{
            echo  "No hi ha saldo suficient. <br>";
            echo "Saldo actual: " . $this->getSaldo() . "€. <br>";
        }
    }

    public function operacion(int $valor, $operacion){
        switch ($operacion){
            case 'ingressar':
                $this->deposit($valor);
                break;
            case 'retirar':
                $this->withdraw($valor);
                break;
            default:
                return "No s'ha pogut realitzar l'operació.";
                break;
        }

}

}

$comptePersonal1 = new Account(001,"Francesc","Terrades",1000);
$valor = $_POST['valor'];
$operacion = $_POST['operacion'];
$comptePersonal1->operacion($valor, $operacion);
