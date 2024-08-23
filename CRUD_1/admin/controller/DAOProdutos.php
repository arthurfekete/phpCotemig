<?php

    require_once 'FabricaConexao.php';
    require_once '../model/Produtos.php';
    class DAOProdutos{

        public function Insert(Produtos $c){

            $sql = 'INSERT INTO produtos(descricao,precoCompra,precoVenda,qtdeEstoque)values(?,?,?,?)';
            $stmt = FabricaConexao::Conexao()->prepare($sql);

            $stmt->bindValue(1,$c->getDescricao());
            $stmt->bindValue(2,$c->getPrecoCompra());
            $stmt->bindValue(3,$c->getPrecoVenda());
            $stmt->bindValue(4,$c->getQtdeEstoque());
            $stmt->execute();
            header("Location: ../view/Principal.php");

        }

    }

?>