<?php 

	

	function listarEstacionamentos(){
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

	function listaInformacoes(){
		include '../config/conexao.php';
		session_start();
		$usuario = $_SESSION['usuarioId'];

		$sql = "SELECT * FROM estacionamento INNER JOIN endereco ON estacionamento.EstacionamentoId = endereco.EstacionamentoId WHERE usuarioId = $usuario ";
		$resultado = $con->query($sql);
		//var_dump($resultado->fetch(PDO::FETCH_OBJ));
		$linha = $resultado->fetch(PDO::FETCH_OBJ);
		return $linha;
	}
?>