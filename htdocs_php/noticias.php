<?php

	$noticias = array();

	$noticias[1]['titulo'] = 'Título da notícia 1';
	$noticias[1]['conteudo'] = 'Conteúdo dessa notícia 1';

	$noticias[2]['titulo'] = 'Título da notícia 2';
	$noticias[2]['conteudo'] = 'Conteúdo dessa notícia 2';

	$noticias[3]['titulo'] = 'Título da notícia 3';
	$noticias[3]['conteudo'] = 'Conteúdo dessa notícia 3';

	//var_dump($noticias);

	//$idx = 1;

	for($idx = 1; $idx <= 3; $idx++) {

		echo $noticias[$idx]['titulo'];
		echo '<br />';
		echo $noticias[$idx]['conteudo'];
		echo '<br />';
		echo '<br />';

	}

	/*do {

		echo $noticias[$idx]['titulo'];
		echo '<br />';
		echo $noticias[$idx]['conteudo'];
		echo '<br />';
		echo '<br />';

		$idx++;
	} while($idx <= 3);*/

	/*while($idx <= 3) {

		echo $noticias[$idx]['titulo'];
		echo '<br />';
		echo $noticias[$idx]['conteudo'];
		echo '<br />';
		echo '<br />';
		
		$idx++;

	}*/

?>