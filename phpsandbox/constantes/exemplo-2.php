<?php 

define("BANCO_DE_DADOS", [
	"127.0.0.1",
	"root",
	"password",
	"test"
]); 

// By default, a constant array is case-sensitive, so to turn it to case-insensitive, insert a third parameter value to true. If it isn't defined, it's false by default

print_r(BANCO_DE_DADOS[2]);
// print_r(banco_de_dados);

 ?>