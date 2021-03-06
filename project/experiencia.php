<?php
    require_once "conexao.php";
    class Experiencia{
        private $idexperiencia;
        private $tipo;
        private $quantidade;
        private $tempo;
        
        public function setIdExperiencia($idexperiencia){
            $this->idexperiencia = $idexperiencia;
        }
        public function getIdExperiencia(){
            return $this->idexperiencia;
        }
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        public function getTipo(){
            return $this->tipo;
        }
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function getQuantidade(){
            return $this->quantidade;
        }
        public function setTempo($tempo){
            $this->tempo = $tempo;
        }
        public function getTempo(){
            return $this->tempo;
        }

        public buscarTodosExp(){
            $conectado = new conexao();
            $st = $conectado->conn->prepare(
            "SELECT * FROM experiencia ORDER BY idexperiencia");
            $st->execute();
            return $st->fetchAll();
        }        
    }