<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn -> beginTransaction();

$stmt = $conn -> prepare("DELETE FROM tb_usuarios WHERE idusuario = ?;");

$id = 1;

$stmt -> execute(array($id));

// Caso não funcione, executar: ALTER TABLE nome_tabela ENGINE INNODB;
// $conn -> rollback();
$conn -> commit();

echo "<p>Dados deletados com sucesso!</p>";

 ?>