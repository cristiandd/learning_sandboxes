<?php 

// setlocale(CONSTANTE PHP, LINUX, UTF-8, WINDOWS) 
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Dia da semana, mês
echo ucwords(strftime("%A %B"));

// Dia da semana abreviado
echo "<p>" . strftime("%a") . "</p>";
// Dia da semana completo
echo "<p>" . strftime("%A") . "</p>";
// Dia do mês com dois dígitos
echo "<p>" . strftime("%d") . "</p>";
// Dia do mês com um dígito
echo "<p>" . strftime("%e") . "</p>";
// Dia do ano com 3 dígitos
echo "<p>" . strftime("%j") . "</p>";
// Dia da semana (1-7) (Começa na segunda)
echo "<p>" . strftime("%u") . "</p>";
// Dia da semana (0-6) (Começa no domingo)
echo "<p>" . strftime("%w") . "</p>";
// Nome do mês abreviado
echo "<p>" . strftime("%b") . "</p>";
// Nome do mês completo
echo "<p>" . strftime("%B") . "</p>";
// Nome do mês abreviado (igual o %b)
echo "<p>" . strftime("%h") . "</p>";
// Representação com dois dígitos do mês
echo "<p>" . strftime("%m") . "</p>";
// Século dois dígitos
echo "<p>" . strftime("%C") . "</p>";
// Ano dois dígitos
echo "<p>" . strftime("%y") . "</p>";
// Ano quatro dígitos
echo "<p>" . strftime("%Y") . "</p>";

 ?>