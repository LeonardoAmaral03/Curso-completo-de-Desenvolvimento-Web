<?php

	// isset() -> verifica se uma variavel foi iniciada
	$valor = null;
	if( isset( $valor ) ) {
		echo 'Variavel iniciada';
	}
	// não iniciada somente se variavel não existir ou com valor nulo (null) atribuido

//////////////////////////////////////////////////////////////////////////////////////////////////////

	// empty() -> retorna true se variavel for vazia
	// casos considerados vazia = '', 0, '0', false, null, array()

	$valor = '1';

	if(empty($valor)) {
		echo 'Variavel vazia';
	}

//////////////////////////////////////////////////////////////////////////////////////////////////////

	// is_numeric() -> verifica se é um número ou uma string numerica
	$valor = '120.30';
	if(is_numeric($valor)) {
		echo 'Valor numero';
	}

?>