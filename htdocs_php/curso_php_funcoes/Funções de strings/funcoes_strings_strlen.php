<?php

	// strlen
	/*$texto = "curso completo de php";
	echo strlen($texto);
	echo '<br /><br />';*/

	// utilizou o operador ternario -> condição ? verdadeiro : falso
	$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '' ;
	$total_string_cpf = strlen($cpf);

	if($total_string_cpf != 11 && $cpf != '') {
		echo "CPF Inválido";
	}

?>


<form method="post" action="">
	<label>
		CPF:
		<input type="text" name="cpf">
	</label>
	<input type="submit" value="cadastrar">

</form>