\\Uma revendedora de carros usados paga a seus funcionários vendedores um salário fixo por mês, mais uma comissão também fixa para cada carro vendido e mais 5% do valor das vendas por ele efetuadas. Escrever um algoritmo que leia o número de carros por ele vendidos, o valor total de suas vendas, o salário fixo e o valor que ele recebe por carro vendido. Calcule e escreva o slário final do vendedor.
<?php
$carros_vendidos = 4;
$valortotal_vendas = $carros_vendidos * $valor_carrovendido;
$salario_fixo = 2280;
$valor_carrovendido = 59990;
$comissao_fixa = 0.05;
$comissao_fixa = $carros_vendidos * $valor_carrovendido;
$comissao_variavel = 0.05;
$comissao_variavel = 0.05 * $valortotal_vendas;
$salario_final = $salario_fixo + $comissao_fixa + $comissao_variavel;
echo"\nA quantidade de carros vendidos é:{$carros_vendidos}";
echo"\nO valor total de vendas é:{$valortotal_vendas}";
echo"\nOsalario fixo é:{$salario_fixo}";
echo"\nA comissao fixa é:{$comissao_fixa}";
echo"\nO salario final do vendedor é:{$salario_final}";
?>