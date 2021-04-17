<?php
    include 'conexao.php';
    class Cargos{
        private $idcargo;
        private $nome_cargo;
        private $salario;

        public function setIdCargo($idcargo){
            $this->idcargo = $idcargo;
        }
        public function getIdCargo(){
            return $this->idcargo;
        }
        public function setNome_Cargo($nome_cargo){
            $this->nome_cargo = $nome_cargo;
        }
        public function getNome_Cargo(){
            return $this->nome_cargo;
        }
        public function setSalario($salario){
            $this->salario = $salario;
        }
        public function getSalario(){
            return $this->salario;
        }

        public function inserir(){

        }
        public function alterar(){

        }
        public function remover(){
            
        }
    }