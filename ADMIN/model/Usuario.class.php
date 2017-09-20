<?php 

	/**
	* 
	*/
	class Usuario{

		private $idUsuario;
		private $nomeUsuario;
		private $senha;
		private $tipoUsuario;
		private $email;
		private $cpf;
		
		function __construct($nomeUsuario, $senha, $tipoUsuario, $email, $cpf){
			$this->nomeUsuario = $nomeUsuario;
			$this->senha = $senha;
			$this->tipoUsuario = $tipoUsuario;
			$this->email = $email;
			$this->cpf = $cpf;
		}

		function getIdUsuario(){
			return $this->idUsuario;
		}

		function getNomeUsuario(){
			return $this->nomeUsuario;
		}

		function getSenha(){
			return $this->senha;
		}

		function getTipoUsuario(){
			return $this->tipoUsuario;
		}

		function getEmail(){
			return $this->email;
		}

		function getCpf(){
			return $this->cpf;
		}

		function setIdUsuario($idUsuario){
			$this->idUsuario = $idUsuario;
		}

		function setNomeUsuario($nomeUsuario){
			$this->nomeUsuario = $nomeUsuario;
		}

		function setSenha($senha){
			$this->senha = $senha;
		}

		function setTipoUsuario($tipoUsuario){
			$this->tipoUsuario = $tipoUsuario;
		}

		function setEmail($email){
			$this->email = $email;
		}

		function setCpf($cpf){
			$this->cpf = $cpf;
		}
	}

?>