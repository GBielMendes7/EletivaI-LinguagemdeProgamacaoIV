<?php

class MestreDeObras extends Servente{
    private $funcionario;


    public function __construct($nome, $codigo, $salarioBase, $funcionario)
    {
        $this->setNome($nome);
        $this->setCodigo($codigo);
        $this->setSalarioBase($salarioBase);
        $this->setFuncionario($funcionario);
    }

    public function getFuncionario(){
        return $this->funcionario;
    }
    public function setFuncionario($funcionario){
        $this->funcionario = $funcionario;
    }

    public function FunComandado(){
        if ($this->funcionario >= 10){
            $res = $this->getSalarioBase() * 0.1;
            return $res;
        }
        else{
            return "menos que 10";
        }
    }

}






?>