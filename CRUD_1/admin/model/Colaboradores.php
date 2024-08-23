<?php

    header('Content-Type: text/html; charset=UTF-8');  

    class Colaboradores {
        private $idColaboradores;
        private $nome;
        private $cpf;
        private $telefone;
        private $email;
        private $dependentesNumero;

        // Getters
        public function getidColaboradores() {
            return $this->idColaboradores;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function getTelefone() {
            return $this->telefone;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getDependentesNumero() {
            return $this->dependentesNumero;
        }

        // Setters
        public function setIdColaboradores($idColaboradores) {
            $this->idColaboradores = $idColaboradores;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function setDependentesNumero($dependentesNumero) {
            $this->dependentesNumero = $dependentesNumero;
        }
    }
?>