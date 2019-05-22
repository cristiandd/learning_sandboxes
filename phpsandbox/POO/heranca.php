<?php 

class Documento {

	private $numero;

	public function getNumero() {
		return $this -> numero;
	}

	public function setNumero($numero) {
		$this -> numero = $numero;
	}

}

class CPF extends Documento {

	$numeroCPF = $this -> getNumero();

	public function validar():bool {
		return true;
	}

}

$doc = new CPF();

$doc -> setNumero("1218281721-12");

var_dump($doc -> validar());

var_dump($doc -> getNumero());

 ?>