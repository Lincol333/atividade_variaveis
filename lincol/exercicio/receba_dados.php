<?php
//receber dados do formulario e guardar na memória
$numero1 = $_GET["numero1"];
$numero2 = $_GET["numero2"];
$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;


echo "<br>A soma do número $numero1 com o número $numero2 é ".$soma;
echo "<br>A subtração do número $numero1 com o número $numero2 é ".$subtracao;
echo "<br>A multiplicaçao do número $numero1 com o número $numero2 é ".$multiplicacao;
echo "<br>A divisão do número $numero1 com o número $numero2 é ".$divisao;

?>