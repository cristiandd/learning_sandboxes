<?php 

class Pessoa {

	public $nome; // Atributo

	public function falar() { // Método
		return "Meu nome é " . $this -> nome;
	}

}

$caesar = new Pessoa(); // O parênteses é opcional sem o método construtor

$caesar -> nome = "Caesar Augustus";

echo $caesar -> falar();

 ?>