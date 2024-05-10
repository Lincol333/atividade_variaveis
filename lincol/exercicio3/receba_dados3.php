<?php
//receber dados do formulario e guardar na memória
$lado1 = $_GET["lado1"];
$lado2 = $_GET["lado2"];
$area = $lado1 * $lado2;

echo "A área da sala é " .$area;
?>