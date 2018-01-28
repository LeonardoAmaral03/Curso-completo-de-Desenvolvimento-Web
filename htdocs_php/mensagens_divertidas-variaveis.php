<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php

			//int
			$valor_inteiro = 1 * 4;
			echo $valor_inteiro;

			echo '<br />';

			$valor_inteiro = $valor_inteiro * 2;
			echo $valor_inteiro;

			echo '<br />';

			//float
			$valor_fracionado = -7.7;
			echo $valor_fracionado;

			echo '<br />';

			//boolean
			$estado = true; // flase
			echo $estado;

			echo '<br />';

			// strings
			// '' exibe o conteudo dentro da aspas, não exibe o conteudo de variavel, caso haja alguma
			$texto = 'Curso de php - '.$valor_inteiro;

			echo $texto;

			echo '<br />';
			// "" verifica dentro se existe variavel e exibe o conteudo dessa variavel
			$texto = "Aspas duplas - $valor_inteiro";

			echo $texto;

			// arrays

		?>
		
	</body>
</html>