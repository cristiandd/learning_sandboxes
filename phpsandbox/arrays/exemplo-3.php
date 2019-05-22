<?php 

$pessoas = array();

// array_push($array1, 4);
// array_pop($array1);
// array_unshift($array1, 0);
// array_shift($array1);

array_push($pessoas, array(
	'nome' => 'João',
	'idade' => 20
));

array_push($pessoas, array(
	'nome' => 'Gláucio',
	'idade' => 25
));

print_r($pessoas[0]['nome']);
print_r($pessoas[1]['idade']);

 ?>