<?php 

function verifyClass($className) {
	var_dump($className);

	$dir = 'class';
	$filename = $dir . DIRECTORY_SEPARATOR . "$className.php";

	if(file_exists($filename)) {
		require_once($filename);
	}

}

spl_autoload_register("verifyClass");

 ?>