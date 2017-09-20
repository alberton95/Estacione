<?php 
	session_start();

	include 'config/conexao.php';

	if((isset($_POST['login'])) && (isset($_POST['senha']))){

		//Caracteres de Escape
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		//Buscando no banco de dados
		$sql = "SELECT * FROM usuario WHERE nomeUsuario = '$login' && Senha = '$senha' ";
		$resultado_usuario = $con->query($sql);
		$resultado = $resultado_usuario->fetch(PDO::FETCH_ASSOC);

		
		if($resultado == true){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nomeUsuario'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['TipoUsuario'];
			$_SESSION['usuarioEmail'] = $resultado['Email'];
			if($_SESSION['usuarioNiveisAcessoId'] == 1){
				header('Location: pages/admPainel.php');
			}elseif ($_SESSION['usuarioNiveisAcessoId'] == 2) {
				header('Location: pages/admCliente.php');
			}
		
		}else{	
			
			$_SESSION['loginErro'] = "Usuario ou senha invalida";
			header("Location: index.php");
		} 

	}else{
		$_SESSION['loginErro'] = "Usuario ou senha invalida";
		header('Location: index.php');
	}
?>