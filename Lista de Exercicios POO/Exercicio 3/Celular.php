<?php

abstract class Celular extends Telefone{
    private $custoMinutoBase;
    private $operadora;

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
        $this->setCustoMinutoBase($custoMinutoBase);
        $this->setOperadora($operadora);
    }

    public function getCustoMinutoBase(){
        return $this->custoMinutoBase;
    }
    public function setCustoMinutoBase($custoMinutoBase){
        $this->custoMinutoBase = $custoMinutoBase;
    }

    public function getOperadora(){
        return $this->operadora;
    }
    public function setOperadora($operadora){
        $this->operadora = $operadora;
    }


}


?>