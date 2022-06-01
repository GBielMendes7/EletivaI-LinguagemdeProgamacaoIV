<?php

namespace Aluno\ProjetoLoja\model\DAO;

use PDO;

class Conexao{

    public static function conectar(){
        return new PDO("mysql:host=localhost; dbname=projetoloja","root","");
    }
}






?>