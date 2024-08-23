<?php

    require_once 'FabricaConexao.php';
    require_once '../model/Pedidos.php';
    class DAOPedidos{

        public function Insert(Pedidos $c){

            $sql = 'INSERT INTO pedidos(fornecedor,produto,quantidadeEstoque,dataPedido,total)values(?,?,?,?,?)';
            $stmt = FabricaConexao::Conexao()->prepare($sql);

            $stmt->bindValue(1,$c->getFornecedor());
            $stmt->bindValue(2,$c->getProduto());
            $stmt->bindValue(3,$c->getQuantidadeEstoque());
            $stmt->bindValue(4,$c->getDataPedido());
            $stmt->bindValue(5,$c->getTotal());
            $stmt->execute();
            header("Location: ../view/Principal.php");

        }

    }

?>