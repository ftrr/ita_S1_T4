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

    public function deposit(int $valor){
        $this->saldo = $this->saldo+$valor;
        echo "S'han ingressat: " . $valor . "€. <br>";
        echo "Saldo actual: " . $this->saldo . "€. <br>";
    }

    public function withdraw(int $valor){
        
        if($this->saldo>=$valor){
            $this->saldo = $this->saldo-$valor;
            echo "S'han retirat: " . $valor . "€. <br>";
            echo "Saldo actual: " . $this->saldo . "€. <br>";
        }else{
            echo  "No hi ha saldo suficient. <br>";
            echo "Saldo actual: " . $this->saldo . "€. <br>";
        }
    }

    public function operacion(int $valor, $operacion){
        switch ($operacion){
            case 'ingressar':
                self::deposit($valor);
                break;
            case 'retirar':
                self::withdraw($valor);
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
