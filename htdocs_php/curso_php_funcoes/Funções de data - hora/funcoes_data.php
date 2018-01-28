<?php

	// date() -> Y - m - d   => Y = 2018  -- y = 18
	
	//echo $data = date("d/m/Y");
	//echo $data = date("d-m-Y");
	//echo $data = date("Y-m-d h:i");
	//echo $data = date("Y-m-d H:i");
	$data = date("Y-m-d H:i");

	// strtotime => converte uma string de data para um time (em segundos)

	$data_inicial = '2015-04-02';
	$data_final = '2015-04-03';

	$time_inicial = strtotime($data_inicial);
	$time_final = strtotime($data_final);

	$diferenca_time = $time_final - $time_inicial;

	$diaSegundos = 24 * 60 * 60;
	$diferenca_dias = $diferenca_time / $diaSegundos;
	echo $diferenca_dias;

?>