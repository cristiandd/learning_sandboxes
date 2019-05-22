<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

// Pode-se implementar várias interfaces (colocar ',')
class Civic implements Veiculo {

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

$carro = new Civic();

echo $carro -> trocarMarcha(1);

 ?>