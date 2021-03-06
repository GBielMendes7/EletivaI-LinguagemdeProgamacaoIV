<?php

namespace Aluno\ProjetoLoja\controller;

use Aluno\ProjetoLoja\model\DAO\ClientesDAO;
use Aluno\ProjetoLoja\model\Entity\Clientes;

class ClienteController{

    //private ClientesDAO $dao;

    public static function abrirFormularioInserir(){
        require_once "../src/view/inserir_cliente.php";
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ClientesDAO();
        $resultado = $dao->consultarPorId($params['1']);
        require_once "../src/view/alterar_cliente.php";
    }

    public static function abrirListaClientes(){
        $dao = new ClientesDAO();
        $resultado = $dao->consultar();
        require_once "../src/view/listar_clientes.php";
    }

    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClienteController::abrirListaClientes();
    }

    public static function editarCliente($params){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $cliente->setId($params[1]);
        $dao = new ClientesDAO();
        if ($dao->alterar($cliente)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClienteController::abrirListaClientes();
    }

    public static function excluirCliente($params){
        $dao = new ClientesDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ClienteController::abrirListaClientes();
    }

}

?>
