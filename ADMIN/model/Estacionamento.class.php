<?php 

	/**
	* 
	*/
	class Estacionamento{
		
		private $estacionamentoID;
		private $ltd;
		private $lng;
		private $nome;
		private $quantVagas;
		private $valor;
		private $horarioFunc;
		private $usuarioID;

		function __construct($estacionamentoID, $ltd, $lng, $nome, $quantVagas, $valor, $horarioFunc, $usuarioID){
			$this->estacionamentoID = $estacionamentoID;
			$this->ltd = $ltd;
			$this->lng = $lng;
			$this->nome = $nome;
			$this->quantVagas = $quantVagas;
			$this->valor = $valor;
			$this->horarioFunc = $horarioFunc;
			$this->usuarioID = $usuarioID;
		} 

		function getEstacionamentoID(){
			return $this->estacionamentoID;
		}

		function getLtd(){
			return $this->ltd;
		}

		function getLng(){
			return $this->lng;
		}

		function getNome(){
			return $this->nome;
		}

		function getQuantVagas(){
			return $this->quantVagas;
		}

		function getValor(){
			return $this->valor;
		}

		function getHorarioFunc(){
			return $this->horarioFunc;
		}	

		function getUsuarioID(){
			return $this->usuarioID;
		}
	}
?>
