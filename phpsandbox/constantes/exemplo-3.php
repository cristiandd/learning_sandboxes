<?php 

// Pre-defined constants

// A versão atual do PHP como uma string no formato "major.minor.release[extra]".
echo "<p>" . PHP_VERSION. "</p>";

echo "<p>" . DIRECTORY_SEPARATOR . "</p>";

// O sistema operacional para o qual o PHP foi compilado.
echo "<p>" . PHP_OS . "</p>";

// A família do sistema operacional para o qual o PHP foi compilado. Qualquer uma entre 'Windows', 'BSD', 'Darwin', 'Solaris', 'Linux' ou 'Unknown'. Disponível a partir do PHP 7.2.0.
echo "<p>" . PHP_OS_FAMILY . "</p>";

// O nome da Server API para esta compilação do PHP. Veja também php_sapi_name().
echo "<p>" . PHP_SAPI . "</p>";

echo "<p>" . DEFAULT_INCLUDE_PATH . "</p>";

// Especifica o caminho onde os binários foram instalados.
echo "<p>" . PHP_BINDIR . "</p>";

// Especifica o caminho do binário do PHP utilizado na execução do script. Disponível a partir do PHP 5.4.
echo "<p>" . PHP_BINARY . "</p>";

 ?>