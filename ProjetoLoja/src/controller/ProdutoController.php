<?php

namespace Aluno\ProjetoLoja\controller;

use Aluno\ProjetoLoja\model\DAO\ProdutoDAO;
use Aluno\ProjetoLoja\model\Entity\Produto;

class ClienteController
{
    public static function abrirFormularioInserir(){
        require_once("../src/view/inserir_produto.php");
    }

    public static function abrirListarProdutos(){
        require_once("../src/view/listar_produtos.php");
    }

    public static function inserirProduto(){
        $produto = new Produto();
        $produto->setDescricao($des = $_POST["des"]);
        $produto->setNome($nome = $_POST["nome"]);
        $produto->setValor($valor = $_POST["valor"]);
        $dao = new ProdutoDAO();
        if ($dao->inserir($produto)){
            $resposta = true;
            require_once "../src/view/listar_produtos.php";
        }else{
            $resposta = false;
        }

        
    }
}
?>