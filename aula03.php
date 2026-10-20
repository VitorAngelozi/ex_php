<?php

# AULA 03 - LAÇOS DE REPETIÇÃO

# EXERCÍCIO 01 - CONTAGEM
# Utilize um laço for para imprimir os números de 1 até 20.
# Cada número deverá aparecer em uma linha.

#for($i=1;$i<= 20;$i++){
    #echo $i . "\n";
#}


# EXERCÍCIO 02 - NÚMEROS PARES
# Utilize um laço de repetição para imprimir
# todos os números pares entre 1 e 50.
#
# Dica: lembre-se do operador %.

#for($i=1;$i<= 50;$i++){
    #if ($i % 2 == 0){
        #echo $i . "\n";
    #}
#}


# EXERCÍCIO 03 - SOMA ACUMULADA
# Crie um programa que calcule a soma de todos
# os números inteiros de 1 até 100.
#
# Exemplo:
# 1 + 2 + 3 + ... + 100
#
# O resultado deverá ser 5050.
#
# Regra: não utilize uma fórmula matemática pronta.
# Faça o cálculo utilizando um laço.
$soma = 0;
for($i=0;$i <= 100; $i++){
    $soma += $i;
    if ($i==100){
        echo $soma;
    }
}
echo $soma;

# EXERCÍCIO 04 - TABUADA
# Crie uma variável $numero contendo um número inteiro.
#
# Utilize um laço para imprimir a tabuada desse número,
# começando em 1 e terminando em 10.
#
# Exemplo para $numero = 5:
# 5 x 1 = 5
# 5 x 2 = 10
# ...
# 5 x 10 = 50


# EXERCÍCIO 05 - CONTADOR REGRESSIVO
# Utilize um laço while para imprimir os números
# de 10 até 1, em ordem decrescente.
#
# Após terminar a contagem, exiba:
# "Contagem finalizada!"


# DESAFIO 06 - CONTAGEM DE APROVADOS
# Considere o seguinte array de notas:
#
# $notas = [8, 4, 7.5, 3, 9, 6, 10];
#
# Utilize foreach para percorrer as notas.
#
# Conte quantos alunos foram aprovados.
# Considere aprovado quem possui nota >= 7.
#
# Ao final, exiba a quantidade de aprovados.
#
# Dica: você vai precisar de uma variável
# para acumular a quantidade.