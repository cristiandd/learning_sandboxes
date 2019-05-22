<?php 

function ola($nome) {
	return "Olá $nome";
}

echo "<p>" . ola("Caesar") . "</p>";

function hello($name = 'Caesar') {
	return "Hello $name";
}

echo "<p>" . hello() . "</p>";

function greeting($firstName, $lastName) {
	return "Hello $firstName $lastName";
}

echo "<p>" . greeting("Caesar", "Augustus") . "</p>";

 ?>