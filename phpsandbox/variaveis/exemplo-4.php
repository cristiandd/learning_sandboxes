<?php 

// Variáveis pré-definidas ou arrays super-globais

$nome = (int)$_GET["a"]; // terá todos os valores especificados recebidos através da URL

// Para passar os valores, é preciso dividir a URL através de um "?". O que vem antes do sinal de interrogação é o domínio e o que vem depois são os valores (querie string). Exemplo: ?a=3&b=1. Os dados sempre virão em tipo string (tanto em GET como POST).

// A URL é dividida em várias URIs. http:// é uma URI, www.google.com é outra, em seguida vem o PATH e depois a querie string.

var_dump($nome);

///////////////////////////////////////////////////////

// Como pegar o ip do usuário

$ip = $_SERVER["REMOTE_ADDR"];
$script = $_SERVER["SCRIPT_NAME"];

echo $ip . "<br><br>";
echo $script;

 ?>