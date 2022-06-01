<?php

namespace Aluno\ProjetoLoja\controller;

use Aluno\ProjetoLoja\model\DAO\ProdutoDAO;
use Aluno\ProjetoLoja\model\Entity\Produto;

class ProdutoController
{
    public static function abrirFormularioInserir(){
        require_once("../src/view/inserir_produto.php");
    }

    public static function abrirFormularioAlterar($params){
        $dao = new ProdutoDAO();
        $resultado = $dao->consultarPorId($params['1']);
        require_once("../src/view/alterar_produtos.php");
    }

    public static function abrirListarProdutos(){
        $dao = new ProdutoDAO();
        $resultado = $dao->consultar();
        require_once("../src/view/listar_produtos.php");
    }

    public static function inserirProduto(){
        $produto = new Produto();
        $produto->setNome($_POST['nome']);
        $produto->setDescricao($_POST['des']);
        $produto->setValor($_POST['valor']);
        $dao = new ProdutoDAO();
        if ($dao->inserir($produto)){
            $resposta = true;
            require_once "../src/view/listar_produtos.php";
        }else{
            $resposta = false;
        }
        ProdutoController::abrirListarProdutos();
        
    }
    public static function editarCliente($params){
        $produto = new Produto();
        $produto->setNome($_POST['nome']);
        $produto->setDescricao($_POST['des']);
        $produto->setValor($_POST['valor']);
        $produto->setId($params[1]);
        $dao = new ProdutoDAO();
        if ($dao->alterar($produto)){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutoController::abrirListarProdutos();
    }

    public static function excluirProduto($params){
        $dao = new ProdutoDAO();
        if ($dao->excluir($params[1])){
            $resposta = true;
        } else {
            $resposta = false;
        }
        ProdutoController::abrirListarProdutos();
    }
    
}
?>