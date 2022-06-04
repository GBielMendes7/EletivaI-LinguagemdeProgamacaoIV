<?php

namespace Aluno\ProjetoLoja\controller;


class HomeController{

    //private ClientesDAO $dao;

    public static function abrirHome(){
        require_once "../src/view/home.php";
    }
}

?>    