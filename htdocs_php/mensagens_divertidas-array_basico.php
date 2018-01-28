<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<title>Mensagens divertidas</title>
	</head>

	<body>

		<?php

			// arrays
			//$mensagens_divertidas['a'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec turp.';
			//$mensagens_divertidas['b'] = 'Ultrices purus. Proin laoreet commodo turpis vestibulum laoreet. Morbi mattis erat quis enim blandit.';
			//$mensagens_divertidas[3] = 'pretium. "Integer?" blandit aliquam libero eu mollis.';
			//$mensagens_divertidas[4] = 'Nam ac volutpat turpis. Nullam sit amet orci mauris. Pellentesque facilisis sapien.';
			//$mensagens_divertidas[5] = 'in odio elementum, quis rhoncus nulla tincidunt. Vivamus iaculis justo dictum interdum.';

			$teste = 'teste com variavel';

			//
			$mensagens_divertidas = array(
				'a' => 2,
				'b' => true,
				3 => -7.75,
				4 => $teste,
				5 => 'in odio elementum, quis rhoncus nulla tincidunt. Vivamus iaculis justo dictum interdum.'
			);

			var_dump($mensagens_divertidas); // recebe o array por parametro e vai acessar cada um de seus indices e 									 fazer a impressão
			echo '<br />';
			echo '<br />';

			print_r($mensagens_divertidas); // recebe o array por parametro e vai acessar cada um de seus indices e 								   fazer a impressão
			echo '<br />';
			echo '<br />';

			echo $mensagens_divertidas[4]; // so imprime quando se tem o indice

			echo '<br />';
			echo '<br />';

			print $mensagens_divertidas[3]; // so imprime quando se tem o indice

		?>
		
	</body>
</html>