<?php

	class Produto{
		//Atributos
		var $codigo;
		var $nome;
		var $descricao;

		//Métodos - getters e setters
		function setCodigo($cod) {
			$this->codigo = $cod;
		}

		function getCodigo() {
			return $this->codigo;
		}

		function setNome($nome) {
			$this->nome = $nome;
		}

		function getNome() {
			return $this->nome;
		}

		function setDescricao($descricao) {
			$this->descricao = $descricao;
		}

		function getDescricao() {
			return $this->descricao;
		}
	}

	$produto = new Produto();

	$produto->setCodigo('0012345');
	$produto->setNome('Notebook');
	$produto->setDescricao('14" Touchscreen Branco');

	echo $produto->getCodigo().'<br />';
	echo $produto->getNome().'<br />';
	echo $produto->getDescricao();

?>