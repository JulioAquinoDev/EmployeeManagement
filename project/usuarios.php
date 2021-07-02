<?php
    require_once "conexao.php";
    class Usuarios{
        private $idusuario;
        private $nomeusuario;
        private $login;
        private $senha;
        private $email;
        private $telefone;
        private $cadastro;
        private $status;

        public function setIdUsuario($idusuario){
            $this->idusuario = $idusuario;
        }
        public function getId(){
            return $this->idusuario;
        }
        public function setNomeUsuario($nomeusuario){
            $this->nomeusuario=$nomeusuario;
        }
        public function getNomeUsuario(){
            return $this->nomeusuario;
        }
        public function setLogin($login){
            $this->login=$login;
        }
        public function getLogin(){
            return $this->login;
        }
        public function setSenha($senha){
            $this->senha=$senha;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setEmail($email){
            $this->email=$email;
        }
        public function getEmail(){
            return $this->email;
        }
        public function setTelefone($telefone){
            $this->telefone=$telefone;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function setCadastro($cadastro){
            $this->cadastro=$cadastro;
        }
        public function getCadastro(){
            return $this->cadastro;
        }
        public function setStatus($status){
            $this->status=$status;
        }
        public function getStatus(){
            return $this->status;
        }

        public function inserirU(){
            $cnx = new conexao();
            $us=$cnx->conn->prepare("INSERT INTO
            usuarios(nomeusuario, login, senha,email,telefone)".
            "values(:n,:l,:s,:e,:t)");
            $us->bindValue(":n",$this->getNomeUsuario());
            $us->bindValue(":l",$this->getLogin());
            $us->bindValue(":s",$this->getSenha());
            $us->bindValue(":e",$this->getEmail());
            $us->bindValue(":t",$this->getTelefone());
            return $us->execute();
        }

        public function alterarU(){
            $conectado= new conexao();
			$us=$conectado->conn->prepare(
			"update usuarios set senha=:s where email=:e");
			$us->bindValue(":e",$this->getEmail());
			$us->bindValue(":s",$this->getSenha());
			return $us->execute();
        }
        public function buscarTodosEmail(){
            $conectado= new conexao();
			$us=$conectado->conn->prepare(
			"select * from usuarios where email=:e");
			$us->bindValue(":e",$this->getEmail());
			$us->execute();	
			return $us->fetch();
        }
    }