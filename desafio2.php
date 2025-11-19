<?php
// aninhamento de variáveis
echo nl2br("Resolva o problema a seguir: Utilize as funções matemáticas até aqui estudadas para resolver\n\n");


$primeiroNumero = 10.3;
$segundoNumero = 4.7;


// trabalhando com função round()
echo("O resultado  do Primeiro número $primeiroNumero com a função round : ". round($primeiroNumero));


// trabalhando com função floor() pra baixo
echo nl2br("\nO resultado do Segundo número com a função round : ". round($segundoNumero) ."\n");

// trabalhando com função ceil() pra cima
echo ("O resultado  do Primeiro número $primeiroNumero com a função floor ". floor($primeiroNumero) );



// trabalhando com função pow() 
echo nl2br("\nO resultado  do Segundo número $segundoNumero com a função floor é: ".
floor($segundoNumero). "\n" );


// trabalhando com função ceil() pra cima
echo ("O resultado  do Primeiro número $primeiroNumero com a função ceil ". ceil($primeiroNumero) );


echo nl2br("\nO resultado  do Segundo número $segundoNumero com a função ceil é: ".
ceil($segundoNumero). "\n" );


// trabalhando com função pow() 
echo("A potência de ". round($primeiroNumero)." elevado ao expoente ". ceil($segundoNumero) ." é: ". pow(round($primeiroNumero),ceil($segundoNumero)) );



// trabalhando com função sqrt() 
echo nl2br("\nA raiz quadrada de ". floor($segundoNumero)." é = ".  sqrt((floor($segundoNumero)))."\n" );



?>