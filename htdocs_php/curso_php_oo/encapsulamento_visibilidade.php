<?php
	
	class Veiculo{

		/*
			public - pode ser acessado e alterado dentro da classe e fora da classe
			private - pode ser alterado somente dentro da propria classe
			protected - pode ser alterado dentro da propria classe e nas classes filhas, mas não externo às classes
		*/

		private $placa;
		private $cor;
		protected $tipo='Caminhonete'; // protected permite a classe filha Carro acessar este atributo

		//Métodos Publicos
		public function setPlaca($parametro_placa){
			//Validação da placa
			$this->placa = $parametro_placa;
		}

		public function getPlaca() {
			return $this->placa;
		}
	}

	class Carro extends Veiculo{
		public function exibirTipo() {
			echo $this->tipo;
		}
	}

	$veiculo = new Veiculo();
	$veiculo->setPlaca('JAM3636');
	echo $veiculo->getPlaca() . '<br><br>';

	$carro = new Carro();
	$carro->exibirTipo();

?>