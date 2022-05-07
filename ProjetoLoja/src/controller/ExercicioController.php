<?php

namespace Aluno\ProjetoLoja\controller;

class ExercicioController
{
    public static function exibir(){
        require_once("../src/view/exemplo.php");
    }

    public static function exebirResultado(){
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];
        $soma = $valor1 + $valor2;

        require_once("../src/view/exemplo.php");
    }
}

?>