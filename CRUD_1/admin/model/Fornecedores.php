<?php      

    header('Content-Type: text/html; charset=UTF-8');

    class Fornecedores {
        private $idFornecedores;
        private $nome;
        private $cnpj;
        private $insc_estadual;
        private $contato;
        private $endereco;

        // Getters
        public function getIdFornecedores() {
            return $this->idFornecedores;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getCnpj() {
            return $this->cnpj;
        }

        public function getInsc_Estadual() {
            return $this->insc_estadual;
        }

        public function getContato() {
            return $this->contato;
        }

        public function getEndereco() {
            return $this->endereco;
        }

        // Setters
        public function setIdFornecedores($idFornecedores) {
            $this->idFornecedores = $idFornecedores;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setCnpj($cnpj) {
            $this->cnpj = $cnpj;
        }

        public function setInsc_Estadual($insc_estadual) {
            $this->insc_estadual = $insc_estadual;
        }

        public function setContato($contato) {
            $this->contato = $contato;
        }

        public function setEndereco($endereco) {
            $this->endereco = $endereco;
        }
    }
?>