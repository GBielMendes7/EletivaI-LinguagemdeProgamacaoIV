<?php

abstract class Telefone{
    private $ddd;
    private $numero;

    public function __construct($ddd, $numero)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
    }

    public function getDdd(){
        return $this->ddd;
    }
    public function setDdd($ddd){
        $this->ddd = $ddd;
    }

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }

    abstract public function calcularCusto($tempo);





}


?>