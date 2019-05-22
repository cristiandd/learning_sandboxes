<?php 

$a = 10;

function trocaValor($a) {
	$a += 50;
	return $a;
}

echo "<p>" . trocaValor($a) . "</p>";
echo "<p>$a</p>";

function trocaValorPorReferencia(&$a) {
	$a += 50;
	return $a;
}

echo "<p>" . trocaValorPorReferencia($a) . "</p>";
echo "<p>$a</p>";

 ?>