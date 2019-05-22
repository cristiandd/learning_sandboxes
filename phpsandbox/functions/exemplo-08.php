<?php 


// Converte o retorno para outro tipo
function soma(int ...$valores):string {
	return array_sum($valores);
}

var_dump(soma(2, 20, 17, 11.65));

 ?>