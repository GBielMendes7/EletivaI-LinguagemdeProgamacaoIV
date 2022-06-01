<?php

namespace Aluno\ProjetoLoja\model\DAO;

use Aluno\ProjetoLoja\model\Entity\Produto;

class ProdutoDAO{

    public function inserir(Produto $pr){
        try{
            $sql = "INSERT INTO `produto`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $pr->getNome());
            $p->bindValue(":descricao", $pr->getDescricao());
            $p->bindValue(":valor", $pr->getValor());
            return $p->execute();
        }catch(\Exception $e){
            return false;
        }
    }

    public function alterar(Produto $pr){
        try{
            $sql = "UPDATE `produto` SET `nome`= :nome,`descricao`= :descricao,`valor`= :valor WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":nome", $pr->getNome());
            $p->bindValue(":descricao", $pr->getDescricao());
            $p->bindValue(":valor", $pr->getValor());
            return $p->execute();

        }catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produto` WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);

        }catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produto";
            return Conexao::conectar()->query($sql);

        }catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produto WHERE id = :id";
            $p = Conexao::conectar()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();

        }catch(\Exception $e){
            return false;
        }
    }
}


?>