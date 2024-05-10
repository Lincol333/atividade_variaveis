\\ O custo de um carro novo ao consumidor é a soma do custo de fábrica com a percentagem do distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que  o percentual do distribuidor seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de fábrica de um carro, calcular e escrever o custo final ao consumidor.
<?php
$imposto1 = 0.45;
$imposto2 = 0.28;
$custo_fabricacao =  160 * 5.09;

$distribuidor_imposto1 = $custo_fabricacao * $imposto1; 
$distribuidor_imposto2 = $custo_fabricacao * $imposto2; 
$imposto_final = $imposto1 + $imposto2;
$carro_novo = $imposto_final + $custo_fabricacao;
echo"\n".$carro_novo;

?>