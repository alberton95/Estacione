<?php 
	/**
	* 
	*/
	class Endereco{

		private $enderecoID;
		private $estado;
		private $cidade;
		private $bairro;
		private $rua;
		private $numero;
		private $estacionamentoID;
		
		function __construct($endereco, $estado, $cidade, $bairro, $rua, $numero, $estacionamentoID){
			$this->enderecoID = $endereco;
			$this->estado = $estado;
			$this->cidade = $cidade;
			$this->bairro = $bairro;
			$this->rua = $rua;
			$this->numero = $numero;
			$this->estacionamentoID = $estacionamentoID;
		}

		function getEnderecoID(){
			return $this->enderecoID;
		}

		function getEstado(){
			return $this->estado;
		}

		function getCidade(){
			return $this->cidade;
		}

		function getBairro(){
			return $this->bairro;
		}

		function getRua(){
			return $this->rua;
		}

		function getNumero(){
			return $this->numero;
		}

		function getEstacionamentoID(){
			return $this->estacionamentoID;
		}

		function setEnderecoID($enderecoID){
			$this->enderecoID = $enderecoID;
		}

		function setEstado($estado){
			$this->estado = $estado;
		}

		function setCidade($cidade){
			$this->cidade = $cidade;
		}

		function setBairro($bairro){
			$this->bairro = $bairro;
		}

		function setRua($rua){
			$this->rua = $rua;
		}

		function setNumero($numero){
			$this->numero = $numero;
		}

		function setEstacionamentoID($estacionamentoID){
			$this->estacionamentoID = $estacionamentoID;
		}
	}
?>