<?php  

    header('Content-Type: text/html; charset=UTF-8');

    class Pagamentos {
        private $idPagamentos;
        private $forma;
        private $prazo;

        // Getters
        public function getIdPagamentos() {
            return $this->idPagamentos;
        }

        public function getForma() {
            return $this->forma;
        }

        public function getPrazo() {
            return $this->prazo;
        }

        // Setters
        public function setIdPagamentos($idPagamentos) {
            $this->idPagamentos = $idPagamentos;
        }

        public function setForma($forma) {
            $this->forma = $forma;
        }

        public function setPrazo($prazo) {
            $this->prazo = $prazo;
        }
    }
?>