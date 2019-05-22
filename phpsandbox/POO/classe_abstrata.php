<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

// Não é possível instanciar uma classe abstrata. É necessário criar uma classe filha para utilizar suas propriedades e métodos
abstract class Automovel implements Veiculo {

	public function acelerar($velocidade) {
		return "Velocidade: $velocidade km/h";
	}

	public function frenar($velocidade) {
		return "Velocidade: $velocidade km/h";
	}

	public function trocarMarcha($marcha) {
		return "Marcha: $marcha";
	}

}

class DelRey extends Automovel {

	public function empurrar() {

	}

}

// $carro = new DelRey();
$carro = new Automovel();

echo $carro -> acelerar(200);

?>