<?php 

function fibonacci($topo) {
	$anterior = 1;
	$proximo = 0;
	$fibonacci = array();

	for($a = 1; $a < $topo; $a = $proximo) {
		$proximo = $a + $anterior;
		$anterior = $a;
		array_push($fibonacci, $a);
	}

	return $fibonacci;
}

function numPares($array) {
	$numPares = array_filter($array, function($valor) {
		return $valor % 2 === 0;
	});

	return $numPares;
}

function somaPares($array) {
	$soma = array_sum($array);
	// $soma = array_reduce($array, function($anterior, $atual) {
	// 	return $anterior + $atual;
	// });
	return $soma;
}

print_r(somaPares(numPares(fibonacci(4000000))));

?>