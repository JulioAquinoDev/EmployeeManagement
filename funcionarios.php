<?php
    include 'conexao.php';
    class Funcionarios{
        private $idfuncionario;
        private $nome;
        private $datanascimento;
        private $cpf;
        private $cadastro;
        private $id_cargo;
        private $id_setor;
        private $id_experiencia;
        private $id_usuario;

        public function setIdFuncionario($idfuncionario){
            $this->idfuncionario = $idfuncionario;
        }
        public function getIdFuncionario(){
            return $this->idfuncionario;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setDataNascimento($datanascimento){
            $this->datanascimento = $datanascimento;
        }
        public function getDataNascimento(){
            return $this->datanascimento;
        }
        public function setCPF($cpf){
            $this->cpf = $cpf;
        }
        public function getCPF(){
            return $this->cpf;
        }
        public function setCadastro($cadastro){
            $this->cadastro = $cadastro;
        }
        public function getCadastro(){
            return $this->cadastro;
        }
        public function setId_Cargo($id_cargo){
            $this->id_cargo = $id_cargo;
        }
        public function getId_Cargo(){
            return $this->id_cargo;
        }
        public function setId_Setor($id_setor){
            $this->id_setor = $id_setor;
        }
        public function getId_Setor(){
            return $this->id_setor;
        }
        public function setId_Experiencia($id_experiencia){
            $this->id_experiencia = $id_experiencia;
        }
        public function getId_Experiencia(){
            return $this->id_experiencia;
        }
        public function setId_Usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
        public function getId_Usuario(){
            return $this->id_usuario;
        }


        public function imprime(){

        }

        public function inserir(){

        }

        public function alterar(){

        }

        public function apagar(){

        }

        public function buscarTodos(){
            $conectado = new conexao();
            $st = $conectado->conn->prepare(
            "SELECT * FROM funcionarios ORDER BY nome");
            $st->execute();
            return $st->fetchAll();
        }
    }