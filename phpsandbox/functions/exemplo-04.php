<?php 

function ola() {
	$argumentos = func_get_args();
	return $argumentos;
}

print_r(ola("Bom dia", "Boa tarde", "Boa noite", "Olá", "Oi"));

 ?>