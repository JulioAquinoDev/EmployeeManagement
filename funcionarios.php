<?php
    require_once "conexao.php";
    class Funcionarios{
        private $idfuncionario;
        private $nomefuncionario;
        private $datanascimento;
        private $cpf;
        private $cadastro;
        private $salario;
        private $cargo;
        private $setor;
        private $id_experiencia;
        private $id_usuario;

        public function setIdFuncionario($idfuncionario){
            $this->idfuncionario = $idfuncionario;
        }
        public function getIdFuncionario(){
            return $this->idfuncionario;
        }
        public function setNomeFuncionario($nomefuncionario){
            $this->nomefuncionario = $nomefuncionario;
        }
        public function getNomeFuncionario(){
            return $this->nomefuncionario;
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
        public function setSalario($salario){
            $this->salario = $salario;
        }
        public function getSalario(){
            return $this->salario;
        }
        public function setCargo($cargo){
            $this->cargo = $cargo;
        }
        public function getCargo(){
            return $this->cargo;
        }
        public function setSetor($setor){
            $this->setor = $setor;
        }
        public function getSetor(){
            return $this->setor;
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

        public function inserirF(){
            $cnx = new conexao();
            $fc=$cnx->conn->prepare("INSERT INTO
            funcionarios(nomefuncionario, datanascimento, cpf, salario, cargo, setor, id_experiencia, id_usuario)".
            "values(:n,:d,:cp,:sl,:c,:s,:e,:u)");
            $fc->bindValue(":n",$this->getNomeFuncionario());
            $fc->bindValue(":d",$this->getDataNascimento());
            $fc->bindValue(":cp",$this->getCPF());
            $fc->bindValue(":sl",$this->getSalario());
            $fc->bindValue(":c",$this->getCargo());
            $fc->bindValue(":s",$this->getSetor());
            $fc->bindValue(":e",$this->getId_Experiencia());
            $fc->bindValue(":u",$this->getId_Usuario());
            return $us->execute();
        }

        public function alterar(){

        }

        public function apagar(){

        }

        public function buscarTodos(){
            $conectado = new conexao();
            $st = $conectado->conn->prepare(
            "SELECT * FROM funcionarios ORDER BY nomefuncionario DESC");
            $st->execute();
            return $st->fetchAll();
        }
    }