<?php 
	
	include '../model/Usuario.class.php';
	include '../DAO/UsuarioDAO.php';

	$user = new Usuario($_POST['nome'],$_POST['senha'],$_POST['Tipo'],$_POST['email'], $_POST['cpf']);

	$userDAO = new UsuarioDAO();

	//var_dump($user);

	$userDAO->cadastrarUsuario($user);


?>