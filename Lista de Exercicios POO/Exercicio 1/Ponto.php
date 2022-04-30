<?php


class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::setContador();
    }

    public static function setContador(){
        self::$contador++;
    }
    public static function getContador(){
        return self::$contador;
    }

    public function getX(){
        return $this->x;
    }
    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y = $y;
    }

    public function formulaDistancia(Ponto $p){
        $valorX = pow(($p->getX() - $this->x), 2);
        $valorY = pow(($p->getY() - $this->y), 2);
        return sqrt($valorX + $valorY);
    }

    public function formulaDistanciaAlternativa($X2,$Y2){
        $valorX = pow(($X2 - $this->x), 2);
        $valorY = pow(($Y2 - $this->y), 2);
        return sqrt($valorX + $valorY);
    }

    public function formulaDistanciaAlternativa2($X1,$Y1,$X2,$Y2){
        $valorX = pow(($X2 - $X1), 2);
        $valorY = pow(($Y2 - $Y1), 2);
        return sqrt($valorX + $valorY);
    }



}



?>