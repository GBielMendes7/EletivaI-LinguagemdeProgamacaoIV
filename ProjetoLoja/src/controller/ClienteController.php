<?php

namespace Aluno\ProjetoLoja\controller;

use Aluno\ProjetoLoja\model\DAO\ClienteDAO;
use Aluno\ProjetoLoja\model\Entity\Clientes;

class ClienteController
{
    public static function abrirFormularioInserir(){
        require_once("../src/view/inserir_cliente.php");
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($email = $_POST["email"]);
        $cliente->setNome($nome = $_POST["nome"]);
        $cliente->setIdade($idade = $_POST["idade"]);
        $dao = new ClienteDAO();
        if ($dao->inserir($cliente)){
            return "Inserido com sucesso";
        }else{
            return "Erro ao inserir";
        }

        

        require_once("../src/view/inserir_cliente.php");
    }
}
