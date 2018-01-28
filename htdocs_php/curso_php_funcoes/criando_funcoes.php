<?php

	// Função sem retorno			   valor default
	function exibir_boas_vindas($nome='indefinido') {
		//echo "Bem vindo ao curso php, $nome <br />";
		echo "Bem vindo ao curso php, ".$nome."<br />";
	}

	//Função co retorno
	function calcular_soma($num1, $num2) {
		return $num1+$num2;
	}

	//Chamar a função
	exibir_boas_vindas('Leonardo');

	echo calcular_soma(2,2);


	////////////////////////////////////////////////////////////////////////////////////////////////////////
	echo '<br />';
	echo '<br />';

	function primeira_funcao() {
		echo "Curso de PHP";
	}

	primeira_funcao();

	//Caracteres especiais somente o "_"
	//Nunca iniciar funções com números

?>