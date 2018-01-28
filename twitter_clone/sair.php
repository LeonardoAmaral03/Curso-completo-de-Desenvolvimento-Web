<?php

	session_start();

	unset($_SESSION['usuario']); // unset elimina indices de um array - unset(array[indice])
	unset($_SESSION['email']);

	header('Location: index.php');

?>