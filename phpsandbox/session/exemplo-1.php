<?php 

// Por padrão, o PHP vem configurado para não iniciar a sessão automaticamente. Para mudar, é preciso alterar no parâmetro Session Auto Start no arquivo php.ini

// session_start();

require_once('config.php');

$_SESSION["nome"] = "Hcode";

 ?>