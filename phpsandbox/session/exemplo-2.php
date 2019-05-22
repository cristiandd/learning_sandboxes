<?php 

// session_start();

require_once('config.php');

// limpa variáveis de sessão, mas o servidor continua sabendo quem você é
// session_unset(); // limpa todas
// unset($_SESSION['nome']) // limpa uma ou mais

// limpa a variável e remove o usuário
session_destroy();

echo $_SESSION['nome'];

 ?>