<?php
// aninhamento de variáveis
echo nl2br("Resolva as operações a seguir. Utilize os operadores de atribuição para resolver\n\n");

$primeiroNumero=20;
$segundoNumero=10;

// trabalhando forma aninhada do operador de atribuição
echo("Somando 5 unidades da variável Primeiro número: ".
$primeiroNumero+=5);

echo nl2br("\nSubtraindo 2 unidades da variável Segundo número: ".
$segundoNumero-=2 ."\n");


echo nl2br("\nMultiplicando a variável Primeiro Número por 5: ".
$primeiroNumero*=5 ."\n");


echo nl2br("\nDividindo Segundo número por 4: ".
$segundoNumero/=4 ."\n");

echo nl2br("\nO módulo de Primeiro Número pelo Segundo número é : ".
$primeiroNumero %= $segundoNumero);


















?>