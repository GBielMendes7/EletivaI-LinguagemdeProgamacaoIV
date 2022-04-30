<?php

class Matricial extends Impressora{

    private $capacidadeToner;
    private $frenteVerso;

    public function __construct($marca, $modelo, $coloridas, $peso, $capacidadeToner, $frenteVerso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setColoridas($coloridas);
        $this->setPeso($peso);
        $this->setCapacidadeToner($capacidadeToner);
        $this->setFrenteVerso($frenteVerso);
        
        

    }

    public function getCapacidadeToner(){
        return $this->capacidadeToner;
    }

    public function setCapacidadeToner($capacidadeToner){
        $this->capacidadeToner = $capacidadeToner;
    }

    public function getFrenteVerso(){
        return $this->frenteVerso;
    }

    public function setFrenteVerso($frenteVerso){
        $this->frenteVerso = $frenteVerso;
    }
}


?>