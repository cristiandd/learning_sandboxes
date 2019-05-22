<?php 

class Pessoa {

	public $nome = "Rasmus Lerdorf";
	// Protected: só consegue acessar a própria classe e quem herda
	protected $idade = 48;
	// Private: só consegue acessar a própria classe
	private $senha = "123456";

	public function verDados() {

		echo "<p>" . $this -> nome . "</p>";
		echo "<p>" . $this -> idade . "</p>";
		echo "<p>" . $this -> senha . "</p>";

	}

}

class Programador extends Pessoa {

	public function verDados() {

		echo "<p>" . get_class($this) . "</p>";

		echo "<p>" . $this -> nome . "</p>";
		echo "<p>" . $this -> idade . "</p>";
		echo "<p>" . $this -> senha . "</p>"; // Erro (private)

	}

}

$objeto = new Programador();

// echo $objeto -> senha;

$objeto -> verDados();

 ?>