<?php

class Fixo extends Telefone{
    private $custoMinuto;

    public function __construct($ddd, $numero, $custoMinuto)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
        $this->setCustoMinuto($custoMinuto);
    }

    public function getCustoMinuto(){
        return $this->custoMinuto;
    }
    public function setCustoMinuto($custoMinuto){
        $this->custoMinuto = $custoMinuto;
    }

    public function calcularCusto($tempo)
    {
        return $tempo * $this->custoMinuto;
    }

}


?>