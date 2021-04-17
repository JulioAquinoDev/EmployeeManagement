<?php
    require_once "conexao.php";
    class Setores{
        private $idsetor;
        private $nome;

        public function setIdSetor($idsetor){
            $this->idsetor = $idsetor;
        }
        public function getIdSetor(){
            return $this->idsetor;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }

        public function inserir(){

        }
        public function alterar(){

        }
        public function remover(){
            
        }

    }