<?php  

    header('Content-Type: text/html; charset=UTF-8');

    class Produtos {
        private $idProdutos;
        private $descricao;
        private $precoCompra;
        private $precoVenda;
        private $qtdeEstoque;

        // Getters
        public function getIdProdutos() {
            return $this->idProdutos;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getPrecoCompra() {
            return $this->precoCompra;
        }

        public function getPrecoVenda() {
            return $this->precoVenda;
        }

        public function getQtdeEstoque() {
            return $this->qtdeEstoque;
        }

        // Setters
        public function setIdProdutos($idProdutos) {
            $this->idProdutos = $idProdutos;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function setPrecoCompra($precoCompra) {
            $this->precoCompra = $precoCompra;
        }

        public function setPrecoVenda($precoVenda) {
            $this->precoVenda = $precoVenda;
        }

        public function setQtdeEstoque($qtdeEstoque) {
            $this->qtdeEstoque = $qtdeEstoque;
        }
    }
?>