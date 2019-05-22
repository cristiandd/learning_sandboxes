<?php

interface Veiculo {

	public function acelerar();
	public function frenar();

}

abstract class Carro implements Veiculo {

	function acelerar() {

		return "80";

	}

	function frenar() {

		return "75";

	}

}

?>