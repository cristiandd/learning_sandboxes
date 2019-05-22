<?php 

// Tipos Básicos

	// String

	$nome = "Hcode";
	$site = 'www.hcode.com.br';

	// Número

	$ano = 1990;

	// Ponto flutuante

	$salario = 5500.99;

	// Boolean

	$bloqueado = false;

// Tipos Compostos

	// Array

	$frutas = array("Abacaxi", "Laranja", "Manga");

	//echo $frutas[2];

	// Objeto

	$nascimento = new DateTime(); // objeto da classe DateTime

	//var_dump($nascimento);

// Tipos Especiais

	// Resource

	$arquivo = fopen("exemplo-3.php", "r");

	//var_dump($arquivo);

	// Nulo

	$nulo = NULL;
	$vazio = ""; // Vazio é diferente de nulo, pois reserva um espaço na memória
 ?>