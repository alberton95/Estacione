<?php 
	
	/**
	* 
	*/

	include '../model/Estacionamento.class.php';

	class EstacionamentoDAO{
		
		function cadastrarEstacionamento($estacionamento){
			$est = $estacionamento;

			$Ltd = $est->getLtd();
			$Lng = $est->getLng();
			$Nome = $est->getNome();
			$quantVagas = $est->getQuantVagas();
			$valor = $est->getValor();
			$horarioFunc = $est->getHorarioFunc();
			$usuarioID = $est->getUsuarioID();

			include '../config/conexao.php';

			$stmt = $con->prepare("INSERT INTO estacionamento(Ltd,Lng,Nome,QuantVagas,Valor, HorarioFunc, usuarioId) VALUES(:Ltd,:Lng,:Nome,:QuantVagas,:Valor,:HorarioFunc,:usuarioId)");
			$stmt->bindParam(':Ltd', $Ltd);
			$stmt->bindParam(':Lng', $Lng);
			$stmt->bindParam(':Nome', $Nome);
			$stmt->bindParam(':QuantVagas', $quantVagas);
			$stmt->bindParam(':Valor', $valor);
			$stmt->bindParam(':HorarioFunc', $horarioFunc);
			$stmt->bindParam(':usuarioId',$usuarioID);
			var_dump($stmt->execute());
		}

		function atualizarEstacionamento(){

		}

		function removerEstacionamento(){

		}

		function listarEstacionamento(){
			include '../config/conexao.php';
			$sql = "SELECT * FROM estacionamento INNER JOIN usuario ON estacionamento.usuarioId = usuario.id";
			$resultado = $con->query($sql);
			//var_dump($resultado->fetch(PDO::FETCH_OBJ));
			while ($linha = $resultado->fetch(PDO::FETCH_OBJ)) {
				echo "<tr class='odd gradeX'>";
				echo "<td>$linha->nomeUsuario</td>";
				echo "<td>$linha->Lng</td>";
				echo "<td>$linha->Ltd</td>";
				echo "<td>$linha->QuantVagas</td>";
				echo "<td>$linha->HorarioFunc</td>";
				echo "</tr>";
			}
		}

	}


?>