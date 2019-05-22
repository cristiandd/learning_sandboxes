<?php 

$conn = new mysqli("127.0.0.1", "root", "", "dbphp7");

if ($conn -> connect_error) {
	echo "Error: " . $conn -> connect_error;
}

$result = $conn -> query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// Enquanto houver dados no banco, traga e armazene em $row
// while ($row = $result -> fetch_array()) {
// 	var_dump($row);
// }

// Traz apenas os dados, sem os índices
// while ($row = $result -> fetch_array(MYSQLI_ASSOC)) {
// 	var_dump($row);
// }

$data = array();

// O mesmo da de cima
while ($row = $result -> fetch_assoc()) {
	array_push($data, $row);
}

echo json_encode($data);

 ?>