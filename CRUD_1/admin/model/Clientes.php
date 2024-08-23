<?php 

    header('Content-Type: text/html; charset=UTF-8');

    class Clientes {
        private $idcliente;
        private $nome;
        private $cpf;
        private $telefone;
        private $email;
        private $endereco;

        // Getters
        public function getIdCliente() {
            return $this->idcliente;
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

        public function getEndereco() {
            return $this->endereco;
        }

        // Setters
        public function setIdCliente($idcliente) {
            $this->idcliente = $idcliente;
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

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
    }

?>