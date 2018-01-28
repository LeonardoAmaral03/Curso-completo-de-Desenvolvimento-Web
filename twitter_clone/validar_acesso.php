<?php

	session_start();

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$senha = md5($_POST['senha']);

	$sql = " SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

	$objDb = new db();
	$link = $objDb->conecta_mysql(); // $link recebera o retorno da função conecta_mysql(), a conexão com o bd

	$resultado_id = mysqli_query($link, $sql);

	// teste do if relacionado ao erros de sintaxes e de instrução de consultas
	if($resultado_id){
		$dados_usuario = mysqli_fetch_array($resultado_id); // recupera em formato de array o retorno da pesquisa no banco de dados

		if(isset($dados_usuario['usuario'])){

			$_SESSION['id_usuario'] = $dados_usuario['id'];
			$_SESSION['usuario'] = $dados_usuario['usuario'];
			$_SESSION['email'] = $dados_usuario['email'];
			
			header('Location: home.php');

		} else {
			header('Location: index.php?erro=1'); // força o redirecionamento, encaminha parametros via url (via GET)
		}
	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

	// result mode do mysqli_query:
	// update - true/false
	// insert - true/false
	// select - false/resource
	// delete - true/false

?>