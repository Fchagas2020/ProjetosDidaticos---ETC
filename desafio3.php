<?php
echo nl2br("Resolva o problema a seguir: Utilize os Operadores de Comparação que foram até aqui estudados:\n\n");
$primeiroNumero = 10;
$segundoNumero = 7;
$terceiroNumero = 15;
$primeiroNome = "Ricardo";
$segundoNome = "ricardo";
$terceiroNome = "Maria";
echo nl2br("Primeiro Número: $primeiroNumero\n");
echo nl2br("Segundo Número: $segundoNumero\n");
echo nl2br("Terceiro Número: $terceiroNumero\n");
echo nl2br("Primeiro Nome: $primeiroNome\n");
echo nl2br("Segundo Nome: $segundoNome\n");
echo nl2br("Terceiro Nome: $terceiroNome\n\n");

echo("O Primeiro Nome é diferente do Segundo Nome :");
var_dump($primeiroNome!=$segundoNome);

echo nl2br("\nO Primeiro Nome é diferente do Terceiro Nome :");
var_dump($primeiroNome!=$terceiroNome);

echo nl2br("\nO Primeiro Nome é igual do Segundo Nome :");
var_dump($primeiroNome==$segundoNome);

echo nl2br("\nO Primeiro Nome é igual do Terceiro Nome :");
var_dump($primeiroNome==$terceiroNome);

echo nl2br("\n\nO Primeiro Numero é diferente do Segundo Numero :");
var_dump($primeiroNumero!=$segundoNumero);

echo nl2br("\nO Primeiro Numero é diferente do Terceiro Numero :");
var_dump($primeiroNumero!=$terceiroNumero);

echo nl2br("\nO Primeiro Numero é igual do Segundo Numero:");
var_dump($primeiroNumero==$segundoNumero);

echo nl2br("\nO Primeiro Numero é igual do Terceiro Numero:");
var_dump($primeiroNumero==$terceiroNumero);


echo nl2br("\n\nO Primeiro Numero é identico do Segundo Numero:");
var_dump($primeiroNumero===$segundoNumero);

echo nl2br("\nO Primeiro Numero é identico do Terceiro Numero:");
var_dump($primeiroNumero===$terceiroNumero);

echo nl2br("\nO Primeiro Numero não é identico do Segundo Numero:");
var_dump($primeiroNumero!==$segundoNumero);

echo nl2br("\nO Primeiro Numero não é identico do Terceiro Numero:");
var_dump($primeiroNumero!==$terceiroNumero);


echo nl2br("\n\nO Primeiro Numero é maior que o Segundo Numero:");
var_dump($primeiroNumero>$segundoNumero);

echo nl2br("\nO Primeiro Numero é maior que o Terceiro Numero:");
var_dump($primeiroNumero>$terceiroNumero);

echo nl2br("\nO Primeiro Numero é menor que o Segundo Numero:");
var_dump($primeiroNumero<$segundoNumero);

echo nl2br("\nO Primeiro Numero é menor que o Terceiro Numero:");
var_dump($primeiroNumero<$terceiroNumero);






echo nl2br("\n\nO Primeiro Numero é maior ou igual ao Segundo Numero:");
var_dump($primeiroNumero>=$segundoNumero);

echo nl2br("\nO Primeiro Numero é maior ou igual ao Terceiro Numero:");
var_dump($primeiroNumero>=$terceiroNumero);

echo nl2br("\nO Primeiro Numero é menor ou igual ao Segundo Numero:");
var_dump($primeiroNumero<=$segundoNumero);

echo nl2br("\nO Primeiro Numero é menor ou igual ao Terceiro Numero:");
var_dump($primeiroNumero<=$terceiroNumero);









?>