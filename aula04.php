<?php

# AULA 04 - ARRAYS

# EXERCÍCIO 01 - LISTA DE NOMES
# Crie um array contendo cinco nomes.
# Utilize foreach para imprimir todos os nomes.
# Cada nome deve aparecer em uma linha.

#$nomes= ["Vitor", "Paulo", "Joao", "Carlos", "Rodrigo"];
#foreach($nomes as $nome){
    #echo $nome . "\n";
#}

# EXERCÍCIO 02 - SOMA DOS VALORES
# Considere o array:
#
# $numeros = [10, 20, 30, 40, 50];
#
# Utilize foreach para calcular a soma dos valores.
# Exiba o resultado final.
#
# Regra: não utilize array_sum().
$soma = 0;
$numeros = [10, 20, 30, 40, 50];
foreach($numeros as $numero){
    $soma += $numero;
}
echo "$soma\n";

# EXERCÍCIO 03 - MAIOR NÚMERO
# Considere o array:
#
# $numeros = [15, 8, 42, 23, 4, 16];
#
# Descubra qual é o maior número utilizando um laço.
#
# Regra: não utilize max() ou sort().

$numeros = [15, 8, 42, 23, 4, 16];
$maior = $numeros[0];
foreach ($numeros as $numero){
    if ($numero >= $maior){
        $maior = $numero;
    }
}
echo "$maior\n";

# EXERCÍCIO 04 - USUÁRIO
# Crie um array associativo contendo:
#
# nome
# idade
# email
# cidade
#
# Utilize foreach para exibir as informações
# no formato:
#
# nome: Vitor
# idade: 22
# email: exemplo@email.com
# cidade: Campo Grande

$pessoa=[
    "nome" => "Vitor",
    "idade" => 22,
    "email" => "vitor@gmail.com",
    "cidade" => "cg-ms"
];
foreach($pessoa as $chave => $valor){
    echo "$chave: $valor\n";
}

# EXERCÍCIO 05 - FILTRANDO NOTAS
# Considere o array:
#
# $notas = [8, 3, 9, 5, 7.5, 2, 10];
#
# Crie um novo array contendo apenas as notas
# maiores ou iguais a 7.
#
# Ao final, percorra o novo array e imprima
# as notas aprovadas.
#
# Regra: não utilize array_filter().
$notas = [8, 3, 9, 5, 7.5, 2, 10];
$aprovados = [];
foreach ($notas as $nota){
    if ($nota >= 7){
        $aprovados[]= $nota;
    }
}
foreach($aprovados as $aprovado){
    echo "$aprovado\n";
}

# DESAFIO 06 - CADASTRO DE PRODUTOS
# Crie um array contendo três produtos.
#
# Cada produto deve possuir:
# nome, preco e quantidade.
#
# Utilize um array de arrays associativos.
#
# Percorra todos os produtos utilizando foreach.
#
# Para cada produto, exiba:
# - Nome
# - Preço
# - Quantidade
# - Valor total em estoque (preço * quantidade)
#
# Ao final, exiba o valor total do estoque
# considerando todos os produtos.

$produtos = [
    [
        "nome"=> "Botijão de Gás",
        "preco"=> 180,
        "quantidade" => 2
    ],
    [
        "nome"=> "Feijão de preto",
        "preco"=> 18,
        "quantidade" => 24
    ],
    [
        "nome"=> "Arroz Integral",
        "preco"=> 22,
        "quantidade" => 19
    ],
];

foreach($produtos as $produto){
    foreach($produto as $chave => $valor){
        echo "$chave: $valor\n";
        echo "Total em estoque:" .  $produto["preco"] * $produto["quantidade"] . "\n";
    }
    echo "==============";
}