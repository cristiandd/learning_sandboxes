<?php 

/*
	Require: requires that the file exists and it's functioning correctly. If one of those requirements don't match, it will generate a fatal error and will stop the execution.

	Include search for the specified folder. If they don't find it, they'll look for the default folder in 'php.ini'. It also permits a remote inclusion, but it's dangerous because the remote server may have a malicious file
 */

//include "exemplo-1.php";
// require "exemplo-1.php";
// include_once "exemplo-1.php";
require_once "exemplo-1.php";

$resultadoSoma = somar(10, 20);
$resultadoSub = subtrair(20, 10);

echo "<p>" . $resultadoSoma . "</p>";
echo "<p>" . $resultadoSub . "</p>";

 ?>