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