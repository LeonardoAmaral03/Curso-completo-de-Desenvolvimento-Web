<?php

	// str_replace
	$texto = "12.40";
	echo str_replace(".", ",", $texto);
	echo '<br /><br />';

	$texto = "999.999.999-99";
	$cpf = str_replace(".", "", $texto);
	$cpf = str_replace("-", "", $cpf);
	echo $cpf;
	echo '<br /><br />';

?>