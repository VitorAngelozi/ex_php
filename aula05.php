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
    echo "Maior de idade\n";
}else{
    echo "Menor de idade\n";
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
printf("média: %.2f\n", calcularMedia(1,2,3));

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
function contarAprovados(array $notas): int{
    $aprovados = 0;
    foreach ($notas as $nota){
        if ($nota >= 7){
            $aprovados += 1;
        }
    }    
    return $aprovados;
}
$notas = [1, 7, 3, 10, 9];
printf("aprovados: %d\n", contarAprovados($notas));

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

$produtos = [
["nome" => "Mouse", "preco" => 50],
["nome" => "Teclado", "preco" => 100],
["nome" => "Monitor", "preco" => 900]
];

function buscarProduto(array $produtos, string $nome):array{
    foreach ($produtos as $produto)
        if ($produto["nome"] == $nome){
            return $produto;
        }
    return [];
}
print_r(buscarProduto($produtos, "Teclado"));
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
function calcularEstoque(array $produtos): float{
    $total = 0;
    foreach ($produtos as $produto){
        $total += $produto["preco"];
    }
    return $total;
}

printf("Total: %.2f ", calcularEstoque($produtos));