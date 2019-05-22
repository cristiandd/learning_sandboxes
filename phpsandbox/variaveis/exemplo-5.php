<?php 

$name = "Caesar";

function teste1() {
	echo $name; // Will display an error (notice) because the scope of this $name is different from the global $name
}

function teste2() {
	// echo $GLOBALS['name'];
	global $name; // This will fix the bug. Now the function will hear to the global scope variable $name
	echo $name;
}

function teste3() {
	$name = "Augustus"; // This a completely different variable from the global scope $name
	echo $name;
}

function teste4() {
	// The second attribution sentence will override the first
	global $name;
	$name = "Gaius";
	echo $name;
}

teste4();

?>