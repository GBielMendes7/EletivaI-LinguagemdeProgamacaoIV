<?php

namespace Exercicio3\Php\controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/view/index.php");
    }

    public static function exibirResultado(){
        $valor = $_POST["valor"];
            

        require_once("../src/view/index.php");
    }
}

?>