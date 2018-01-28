<?php
	
	// Operadores de comparação
	// == -> igual
	// === -> identico - verifica se valores são iguais e se são do mesmo tipo
	// != ou <> -> diferente
	// !== -> não identico - verifica se valores sao diferentes ou de tipos diferentes
	// < -> menor que
	// > -> maior que
	// <= -> menor igual
	// >= -> maior igual

	// Operadores lógicos
	// && ou AND -> E
	// || ou OR -> Ou
	// XOR -> retorna verdadeiro se apenas 1 das expressões for verdadeira
	// ! -> Not
	
	// f xor v = v
	if(5 == 3 XOR 'z' == 'z') {
		echo 'verdadeiro';
	} else {
		echo 'falso';
	}

	echo '<br />';
	echo '<br />';
	echo '<br />';
	echo '<br />';
	
	if(2 !== '2') {
		echo 'verdadeiro';
	} else {
		echo 'falso';
	}

?>