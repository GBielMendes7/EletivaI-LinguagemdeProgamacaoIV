<?php

namespace Exercicio5\Php\controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/view/index.php");
    }

    public static function exibirResultado(){
        $nota1 = $_POST["nota1"];
        $nota2 = $_POST["nota2"];
        $nota3 = $_POST["nota3"];
        $nota4 = $_POST["nota4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

        require_once("../src/view/index.php");
    }
}

?>