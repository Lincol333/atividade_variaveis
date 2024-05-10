\\ Faça um algoritmo que leia a idade de uma pessoa expressa em anos, meses e dias e escreva a idade dessa pessoa expressa apenas em dias. Considerar o ano com 365 dias e mês com 30 dias.
<?php
$idade_anos = 48;
$ano = 365;
$mes = 30;
$idade_meses = 4;
$idade_dias = $idade_anos * $ano;
$idade_mensal = $mes * $idade_meses;
$idade_real_dias = $idade_dias + $idade_mensal;
echo"\n".$idade_dias;
echo"\n".$idade_mensal;
echo"\n".$idade_real_dias;

?>