<?php

    require_once 'FabricaConexao.php';
    require_once '../model/Clientes.php';
    class DAOClientes{

        public function Insert(Clientes $c){

            $sql = 'INSERT INTO clientes(nome,cpf,telefone,email,endereco)values(?,?,?,?,?)';
            $stmt = FabricaConexao::Conexao()->prepare($sql);

            $stmt->bindValue(1,$c->getNome());
            $stmt->bindValue(2,$c->getCpf());
            $stmt->bindValue(3,$c->getTelefone());
            $stmt->bindValue(4,$c->getEmail());
            $stmt->bindValue(5,$c->getEndereco());
            $stmt->execute();
            header("Location: ../view/Principal.php");

        }

    }

?>