<?php

    require_once 'FabricaConexao.php';
    require_once '../model/Pagamentos.php';
    class DAOPagamentos{

        public function Insert(Pagamentos $c){

            $sql = 'INSERT INTO pagamentos(forma,prazo)values(?,?)';
            $stmt = FabricaConexao::Conexao()->prepare($sql);

            $stmt->bindValue(1,$c->getForma());
            $stmt->bindValue(2,$c->getPrazo());
            $stmt->execute();
            header("Location: ../view/Principal.php");

        }

    }

?>