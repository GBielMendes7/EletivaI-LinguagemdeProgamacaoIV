<?php

namespace Exercicio2\Php\controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/view/index.php");
    }

    public static function exibirResultado(){
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $soma = $valor1 * $valor2;

        require_once("../src/view/index.php");
    }
}

?>