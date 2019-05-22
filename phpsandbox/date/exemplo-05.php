<?php 

$data = new DateTime();
$periodo = new DateInterval("P3D");
$periodo2 = new DateInterval("P10Y");

echo "<p>" . $data -> format("l, d/m/Y H:i:s") . "</p>";

$data -> add($periodo);

echo "<p>" . $data -> format("l, d/m/Y H:i:s") . "</p>";

$data -> sub($periodo2);

echo "<p>" . $data -> format("l, d/m/Y H:i:s") . "</p>";

 ?>