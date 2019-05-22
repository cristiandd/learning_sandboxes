<?php 

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn -> prepare("SELECT * FROM tb_usuarios");

$stmt -> execute();

// $results = $stmt -> fetchAll();
$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row) {

	foreach($row as $key => $value) {

		echo "<p><strong>$key: $value</strong></p>";

	}

	echo "<hr>";

}

 ?>