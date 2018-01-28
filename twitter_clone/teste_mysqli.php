<?php

	require_once('db.class.php');

	$sql = " SELECT * FROM usuarios ";

	$objDb = new db();
	$link = $objDb->conecta_mysql(); // $link recebera o retorno da função conecta_mysql(), a conexão com o bd

	$resultado_id = mysqli_query($link, $sql);

	// teste do if relacionado ao erros de sintaxes e de instrução de consultas
	if($resultado_id){
		//$dados_usuario = mysqli_fetch_array($resultado_id); // recupera em formato de array o retorno da pesquisa no banco de dados, mas essa função retorna somente um registro do select, então uma estrutura de repetição é necessária para guardar mais de um registro

		// $dados_usuario = mysqli_fetch_array($resultado_id); - retorna array com os elementos duplicados, um com os elementos numericos (0, 1, 2...) e outro com elemento associativo (id, usuario, senha...)
		// de forma explicita -> $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_BOTH);

		// $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_NUM); - MYSQLI_NUM -> os elementos são retornados em um array apenas com os indices numericos

		// $dados_usuario = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC); - MYSQLI_ASSOC -> os elementos são retornados em um array apenas com os indices associativos

		$dados_usuario = array();

		while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)) {
			$dados_usuario[] = $linha;
		}

		foreach($dados_usuario as $usuario) {
			var_dump($usuario);
			echo '<br />';
			var_dump($usuario['usuario']);
			echo '<br />';
			echo $usuario['usuario'];
			echo '<br /><br />';
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