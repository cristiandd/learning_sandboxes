<?php 

$pessoa = array(
	'nome' => 'João',
	'idade' => 20
);

foreach($pessoa as &$valor) {
	if(gettype($valor) === 'integer') {
		$valor += 10;
	}
	echo "<p>$valor</p>";
}

print_r($pessoa);

 ?>