<?php

    header('Content-Type: text/html; charset=UTF-8');

    class Pedidos {
        private $idPedidos;
        private $fornecedor;
        private $produto;
        private $quantidadeEstoque;
        private $dataPedido;
        private $total;

        // Getters
        public function getIdPedidos() {
            return $this->idPedidos;
        }

        public function getFornecedor() {
            return $this->fornecedor;
        }

        public function getProduto() {
            return $this->produto;
        }

        public function getQuantidadeEstoque() {
            return $this->quantidadeEstoque;
        }

        public function getDataPedido() {
            return $this->dataPedido;
        }

        public function getTotal() {
            return $this->total;
        }

        // Setters
        public function setIdPedidos($idPedidos) {
            $this->idPedidos = $idPedidos;
        }

        public function setFornecedor($fornecedor) {
            $this->fornecedor = $fornecedor;
        }

        public function setProduto($produto) {
            $this->produto = $produto;
        }

        public function setQuantidadeEstoque($quantidadeEstoque) {
            $this->quantidadeEstoque = $quantidadeEstoque;
        }

        public function setDataPedido($dataPedido) {
            $this->dataPedido = $dataPedido;
        }

        public function setTotal($total) {
            $this->total = $total;
        }
    }
?>