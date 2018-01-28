<?php

	// is_array -> verifica se e um array
	$array = array('notebook', 'teclado');
	$retorno = is_array($array);

	if($retorno) {
		echo "Verdadeiro";
	} else {
		echo "Falso";
	}
	echo "<br /><br />";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// in_array -> verifica se elemento esta no array
	$array = array('mac', 'linux', 'windows');
	$retorno = in_array('solaris', $array);

	if($retorno) {
		echo "Verdadeiro";
	} else {
		echo "Falso";
	}
	echo "<br /><br />";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// array_keys -> pega somente as chaves (indices) do array e retorna um array com essas chaves
	$produtos = array(10=>'notebook', 11=>'teclado');
	$chaves_array = array_keys($produtos);

	var_export($chaves_array);
	echo "<br /><br />";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// sort -> ordena array mas nao mantem os indices dos elementos
	$frutas = array(0=>'banana', 1=>'amora', 2=>'carambola');

	sort($frutas);
	var_export($frutas);
	echo "<br /><br />";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// asort -> ordena o array mantendo os indices dos elementos os mesmos
	$frutas = array(0=>'banana', 1=>'amora', 2=>'carambola');

	asort($frutas);
	var_export($frutas);
	echo "<br /><br />";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// count -> retorna a qtde de elementos do array
	$frutas = array(0=>'banana', 1=>'amora', 2=>'carambola');

	$itens_array = count($frutas);
	echo $itens_array;
	echo "<br /><br />";

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// array_merge -> funde dois arrays
	$array1 = array('mac', 'linux');
	$array2 = array('windows');
	$array3 = array('solaris');

	$novo_array = array_merge($array1, $array2, $array3);
	var_export($novo_array);
	echo "<br /><br />";

////////////////////////////////////////////////////////////////////////////////////////////////////////////

	// explode -> divide uma string baseada em um delimitador
	$string = "20/10/2020";
	$retorno = explode("/", $string);

	var_export($retorno);
	echo "<br /><br />";

	// implode -> junta elementos de um array em uma string
	$nova_string = implode("-", $retorno); // recebe como parametro um array e concatena com a string do 1º parametro
	echo $nova_string;

?>