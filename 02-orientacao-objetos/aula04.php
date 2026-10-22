<?php

# AULA 10 - EXERCÍCIO 01
#
# Crie uma função chamada dividir().
#
# Ela deve receber:
# - float $a
# - float $b
#
# Deve retornar um float.
#
# REGRAS:
# - Se $b for zero, lance uma
#   InvalidArgumentException com a mensagem:
#   "Não é possível dividir por zero"
#
# - Caso contrário, retorne a divisão.
#
# TESTES:
#
# 1. Tente dividir 10 por 2.
#    Resultado esperado: 5
#
# 2. Tente dividir 10 por 0.
#    Resultado esperado: mensagem de erro
#
# Utilize try/catch para tratar a exceção.
#
# EXTRA:
# Depois dos testes, exiba:
# "Programa finalizado"
#
# Esse texto deverá aparecer mesmo
# depois da tentativa de divisão por zero.


function dividir(float $a, float $b):float{
    if($b === 0.0){
        throw new InvalidArgumentException("Não é possível dividir por zero");
    }
    return $a / $b;
}

try {
    echo dividir(10,2);
} catch (InvalidArgumentException $erro){
    echo $erro->getMessage();
}
try {
    echo dividir(10,0);
} catch (Exception $erro){
    echo $erro->getMessage();
}
echo "Programa finalizado";