<?php 

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql -> select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

$usuario = new Usuario();

$usuario -> loadbyId(4);

echo $usuario;

 ?>