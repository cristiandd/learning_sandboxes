<?php 

// Declaração de tipos escalares
function soma(int ...$valores) {
	return array_sum($valores);
}

echo soma(2, 20, 17, 11.65);

 ?>