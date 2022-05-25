<?php

namespace Aluno\ProjetoLoja\model\DAO;

use PDO;

class Conexao{

    public static function conectar(){
        return new PDO("mysql:localhost; dbname=projetoloja","root","");
    }
}






?>