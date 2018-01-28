<?php

	// Classe mãe ou superclasse
	class Felino{
		var $mamifero = 'sim';

		function correr() {
			echo 'Correr como felino';
		}
	}

	//Classe filha ou subclasse
	class Chita extends Felino{

		//Polimorfismo
		function correr(){
			echo 'Correr como chita 100KM/H';
		}
	}

	class Gato extends Felino{

	}

	$chita = new Chita();
	$gato = new Gato();

	echo "CHITA <br>";
	echo $chita->mamifero . '<br />';
	$chita->correr();
	echo "<br><br>";

	echo "GATO <br>";
	echo $gato->mamifero . '<br />';
	$gato->correr();

?>