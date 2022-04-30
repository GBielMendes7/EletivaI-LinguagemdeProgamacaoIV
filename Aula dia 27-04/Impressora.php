<?php

class Impressora{

    private $marca;
    private $modelo;
    private $coloridas;
    private $peso;

    public function __construct($marca, $modelo, $coloridas, $peso)
    {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setColoridas($coloridas);
        $this->setPeso($peso);
        
        

    }

    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getColoridas(){
        return $this->coloridas;
    }
    public function setColoridas($coloridas){
        $this->coloridas = $coloridas;
    }

    public function getPeso(){
        return $this->coloridas;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    
    
}


?>