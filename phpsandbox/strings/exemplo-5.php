<?php 

$sentence = "A repetição é mãe da retenção";

$q = strpos($sentence, "mãe");

$text = substr($sentence, 0, $q);
var_dump($text);

$text2 = substr($sentence, $q + strlen("mãe"), strlen($sentence) );

var_dump($text2);

////////////////////////////////////

$frase = "Gaius Julius Caesar Octavius";

var_dump(strlen($frase));
var_dump(mb_strlen($frase));

var_dump(strpos($frase, "Julius"));
var_dump(mb_strpos($frase, "Julius"));

 ?>