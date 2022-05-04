<?php

class Motorista extends Funcionario{
    private $carteira;


    public function __construct($nome, $codigo, $salarioBase, $carterira)
    {
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setSalarioBase($salarioBase);
        $this->setCarteira($carterira);
    }

    public function getCarteira(){
        return $this->carterira;
    }
    public function setCarteira($carterira){
        $this->carterira = $carterira;
    }

    public function Mostrar(){
        echo "Nome: {$this->getNome()}, Codigo: {$this->getCodigo()}, Salário:{$this->getSalarioBase()}, Carteira:{$this->carteira}";

    }

}






?>