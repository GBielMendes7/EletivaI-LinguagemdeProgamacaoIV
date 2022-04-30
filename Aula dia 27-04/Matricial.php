<?php

class Matricial extends Impressora{

    private $numAgulhas;
    private $imprimeVias;

    public function __construct($marca, $modelo, $coloridas, $peso, $numAgulhas, $imprimeVias)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setColoridas($coloridas);
        $this->setPeso($peso);
        $this->setNumAgulhas($numAgulhas);
        $this->setImpriveVias($imprimeVias);
        
        

    }

    public function getNumAgulhas(){
        return $this->numAgulhas;
    }

    public function setNumAgulhas($numAgulhas){
        $this->numAgulhas = $numAgulhas;
    }

    public function getImpriveVias(){
        return $this->imprimeVias;
    }

    public function setImpriveVias($imprimeVias){
        $this->imprimeVias = $imprimeVias;
    }
}


?>