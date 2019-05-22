<?php 

// Modelo camelCase para nomear variáveis
// São case-sensitive
// Variáveis não podem começar com um número, mas podem conter números no meio do nome

/* 

	Comentário de várias linhas

*/

$anoNascimento = 1990;

// Como apagar uma variável

$nome = 'Caesar';
$sobrenome = 'Augustus';
$nomeCompleto = $nome . " " . $sobrenome; // concatenação

echo $nomeCompleto;

exit; // para a execução do código neste ponto

unset($nome); // É possível passar mais de uma variável

if (isset($nome)) { // Se a variável existe, executar o echo
	echo $nome;
}

?>