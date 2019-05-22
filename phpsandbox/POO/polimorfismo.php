<?php 

abstract class Animal {

	public function falar() {
		return "Som";
	}

	public function mover() {
		return "Anda";
	}

}

class Cachorro extends Animal {

	public function falar() {
		return "Late";
	}

}

class Gato extends Animal {

	public function falar() {
		return "Mia";
	}

}

class Passaro extends Animal {

	public function falar() {
		return "Canta";
	}

	public function mover() {
		return "Voa e " . parent::mover();
	}

}

$cachorro = new Cachorro();
$gato = new Gato();
$passaro = new Passaro();

echo "<h3>Cachorro</h3>";
echo "<p>" . $cachorro -> falar() . "</p>";
echo "<p>" . $cachorro -> mover() . "</p>";

echo "<h3>Gato</h3>";
echo "<p>" . $gato -> falar() . "</p>";
echo "<p>" . $gato -> mover() . "</p>";

echo "<h3>Passaro</h3>";
echo "<p>" . $passaro -> falar() . "</p>";
echo "<p>" . $passaro -> mover() . "</p>";

 ?>