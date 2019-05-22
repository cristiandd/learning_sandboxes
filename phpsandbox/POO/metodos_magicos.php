<?php 

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($l, $n, $c) {

		$this -> logradouro = $l;
		$this -> numero = $n;
		$this -> cidade = $c;

	}

	// É executado quando o objeto é destruído
	public function __destruct() {

		var_dump("DESTRUIR");

	}

	// É executado quando se usa um echo, por exemplo
	public function __toString() {

		return $this -> logradouro . ", " . $this -> numero . ", " . $this -> cidade . ".";

	}
}

$endereco = new Endereco("Rua Tibúrcio Magnânimo Oliveira", "456", "Esmeralda");

// var_dump($endereco);

// unset($endereco);

echo $endereco;

 ?>