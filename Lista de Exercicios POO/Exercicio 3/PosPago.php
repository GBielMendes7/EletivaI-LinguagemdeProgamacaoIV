<?php

class PosPago extends Celular{

    public function __construct($ddd, $numero, $custoMinutoBase, $operadora)
    {
        $this->setDdd($ddd);
        $this->setNumero($numero);
        $this->setCustoMinutoBase($custoMinutoBase);
        $this->setOperadora($operadora);
    }

    public function calcularCusto($tempo)
    {
        return ($tempo * $this->getCustoMinutoBase()) * 0.1;
    }


}


?>