\\ Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste. Calcular e escrever o valor do novo salário.
<?php
$salario_mensal = 14380.68;
$reajuste = 5.8;
$salario_final = ($salario_mensal * $reajuste / 100) + $salario_mensal;
echo"\n".$salario_final;
?>