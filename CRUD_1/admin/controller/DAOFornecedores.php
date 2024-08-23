<?php

    require_once 'FabricaConexao.php';
    require_once '../model/Fornecedores.php';
    class DAOFornecedores{

        public function Insert(Fornecedores $c){

            $sql = 'INSERT INTO fornecedores(nome,cnpj,insc_estadual,contato,endereco)values(?,?,?,?,?)';
            $stmt = FabricaConexao::Conexao()->prepare($sql);

            $stmt->bindValue(1,$c->getNome());
            $stmt->bindValue(2,$c->getCnpj());
            $stmt->bindValue(3,$c->getInsc_Estadual());
            $stmt->bindValue(4,$c->getContato());
            $stmt->bindValue(5,$c->getEndereco());
            $stmt->execute();
            header("Location: ../view/Principal.php");

        }

    }

?>