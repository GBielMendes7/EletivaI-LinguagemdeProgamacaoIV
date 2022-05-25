<?php

namespace Aluno\ProjetoLoja\controller;

use Aluno\ProjetoLoja\model\DAO\ClientesDAO;
use Aluno\ProjetoLoja\model\Entity\Clientes;

class ClienteController
{
    public static function abrirFormularioInserir(){
        require_once("../src/view/inserir_cliente.php");
    }

    public static function abrirListarClientes(){
        require_once("../src/view/listar_clientes.php");
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($email = $_POST["email"]);
        $cliente->setNome($nome = $_POST["nome"]);
        $cliente->setIdade($idade = $_POST["idade"]);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            $resposta = true;
            require_once "../src/view/listar_clientes.php";
        }else{
            $resposta = false;
        }

        
    }
}
