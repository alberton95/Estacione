<?php 

	/**
	* 
	*/

	class UsuarioDAO{
		
		function cadastrarUsuario($usuario){

			$user = $usuario;

			var_dump($user);
			$nome = $user->getNomeUsuario();
			$senha = $user->getSenha();
			$tipo = $user->getTipoUsuario();
			$email = $user->getEmail();
			$cpf = $user->getCPF();

			include '../config/conexao.php';
			$stmt = $con->prepare("INSERT INTO usuario(nomeUsuario,Senha,TipoUsuario,Email,CPF) VALUES (:nomeUsuario, :Senha, :TipoUsuario, :Email, :CPF)");

			$stmt->bindParam(':nomeUsuario', $nome);
			$stmt->bindParam(':Senha', $senha);
			$stmt->bindParam(':TipoUsuario', $tipo);
			$stmt->bindParam(':Email', $email);
			$stmt->bindParam(':CPF', $cpf);

			var_dump($stmt->execute());


		}

		function atualizarUsuario(){

		}

		function removerUsuario(){
			include '../config/conexao.php';
			$cpf = 
			$sql = "DELETE FROM usuario WHERE CPF='$cpf'";

		}

		function listarUsuario(){
			include '../config/conexao.php';
			$sql = "SELECT * FROM usuario";
			$resultado = $con->query($sql);

			while ($linha = $resultado->fetch(PDO::FETCH_OBJ)) {
			echo "<tr class='odd gradeX'>";
			echo "<td>$linha->id</td>";
			echo "<td>$linha->nomeUsuario</td>";
			echo "<td>$linha->TipoUsuario</td>";
			echo "<td>$linha->Email</td>";
			echo "<td>$linha->CPF</td>";
			echo "<td><a href='?rm=$linha->CPF''><i class='fa fa-times' aria-hidden='true'></i></a></td>";
			echo "</tr>";
		}
		}
		
	}

?>