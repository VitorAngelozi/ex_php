<?php

# AULA 05 - FUNÇÕES EM PHP

# EXERCÍCIO 01 - CALCULAR QUADRADO
# Crie uma função chamada calcularQuadrado().
# Ela deve receber um número inteiro e retornar
# o quadrado desse número.
#
# Exemplo:
# calcularQuadrado(5) deve retornar 25.
#
# Utilize tipos nos parâmetros e no retorno.

function calcularQuadrado(int $num): int{
    return $num * $num;
}
printf("%d \n", calcularQuadrado(12));


# EXERCÍCIO 02 - VERIFICAR MAIORIDADE
# Crie uma função chamada verificarMaioridade().
# Ela deve receber uma idade inteira.
#
# Retorne true quando a idade for maior ou igual a 18.
# Caso contrário, retorne false.
#
# Fora da função, utilize if/else para exibir:
# "Maior de idade" ou "Menor de idade".

function verificarMaioridade(int $idade):bool{
    return $idade >= 18;
}
if (verificarMaioridade(18)){
    echo "Maior de idade";
}else{
    echo "Menor de idade";
}

# EXERCÍCIO 03 - CALCULAR MÉDIA
# Crie uma função chamada calcularMedia().
# Ela deve receber três notas numéricas.
#
# A função deve calcular e retornar a média.
#
# Utilize float para os parâmetros e o retorno.
# Exiba o resultado fora da função.

function calcularMedia(float $media1, float $media2, float $media3):float{
    return ($media1 + $media2 + $media3)/2;

}
printf("média: %.2f", calcularMedia(1,2,3));

# EXERCÍCIO 04 - CONTAR APROVADOS
# Crie uma função chamada contarAprovados().
#
# Ela deve receber um array de notas.
# Considere aprovado quem possui nota >= 7.
#
# A função deverá retornar a quantidade
# de alunos aprovados.
#
# Exemplo:
# [8, 4, 9, 6, 10]
# Resultado esperado: 3
#
# Regra: utilize foreach e não array_filter().


# EXERCÍCIO 05 - BUSCAR PRODUTO
# Considere o array:
#
# $produtos = [
#     ["nome" => "Mouse", "preco" => 50],
#     ["nome" => "Teclado", "preco" => 100],
#     ["nome" => "Monitor", "preco" => 900]
# ];
#
# Crie uma função chamada buscarProduto().
#
# Ela deve receber:
# - Um array de produtos.
# - O nome do produto que deseja encontrar.
#
# Percorra os produtos e procure pelo nome.
#
# Se encontrar, retorne o array do produto.
# Se não encontrar, retorne null.
#
# Exemplo:
# buscarProduto($produtos, "Teclado")
#
# Resultado esperado:
# ["nome" => "Teclado", "preco" => 100]
#
# Dica: o tipo de retorno pode ser array|null.


# DESAFIO 06 - CALCULAR ESTOQUE
# Reaproveite o array de produtos da Aula 04.
#
# Crie uma função chamada calcularEstoque().
#
# Ela deverá receber um array de produtos
# e retornar o valor total do estoque.
#
# Utilize foreach para percorrer os produtos.
#
# Não utilize echo dentro da função.
# O resultado deve ser exibido fora dela.