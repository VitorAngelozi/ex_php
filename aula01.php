<?php

#Crie um programa em PHP que armazene seu nome, idade, cidade e profissão em variáveis.
#Depois, exiba uma frase utilizando essas variáveis.
#Exemplo de saída:
$nome = "Vitor";
$idade = "22"; #n fiz int pq normalmente idade e cpf são str né? php n é tipado? ntinha q colocar valor?
$cidade = "CG - MS";
$profissao = "Vibecoder";

echo "Meu nome é " . $nome . " tenho " . $idade . ", moro em " . $cidade . " e sou " . $profissao . "\n";

#Crie duas variáveis numéricas e calcule a soma, subtração, multiplicação e divisão entre elas.
#Exiba cada resultado com uma descrição.
$valor1 = 2;
$valor2 = 3;

$soma = $valor1 + $valor2;
$subtracao = $valor1 - $valor2;
$multiplicacao = $valor1 * $valor2;
$divisao = $valor1 / $valor2;

echo $soma. "\n" . $subtracao . "\n" . $multiplicacao . "\n" . $divisao . "\n";

#Uma loja vende um produto por R$ 150,00. Um cliente compra 4 unidades e recebe 10% de desconto sobre o valor total.
#Desenvolva um programa que calcule e exiba:

$produto = 150;
$compra_desconto = $produto * 4 - ($produto * 0.1);

echo "Valor total: ". "\n" . $produto * 4 . "\n" . "Valor do desconto: " . "\n" . $produto * 4  - $compra_desconto . "\n" . "Valor final: " . $compra_desconto;