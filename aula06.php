<?php

# AULA 06 - MANIPULAÇÃO DE STRINGS E ARRAYS

# EXERCÍCIO 01 - NORMALIZAR NOME
# Crie uma função chamada normalizarNome().
#
# Ela deve receber uma string e retornar
# o nome sem espaços extras nas extremidades
# e com todas as letras em maiúsculas.
#
# Exemplo:
# Entrada: "  vitor silva  "
# Saída: "VITOR SILVA"
#
# Utilize trim() e strtoupper().
function normalizarNome(string $nome): string{
    return strtoupper(trim($nome));
}
echo normalizarNome("Vitor HUGo ") . "\n";

# EXERCÍCIO 02 - CONTAR CARACTERES
# Crie uma função chamada contarCaracteres().
#
# Ela deve receber uma string e retornar
# a quantidade de caracteres.
#
# Exemplo:
# contarCaracteres("Laravel")
# Resultado: 7
#
# Utilize strlen().
# Para este exercício, use palavras sem acentos.
function contarCaracteres(string $palavra): int{
    return strlen($palavra);
}
echo contarCaracteres("jabuti") . "\n";
# EXERCÍCIO 03 - VERIFICAR EXISTÊNCIA
# Considere o array:
#
# $linguagens = ["PHP", "Python", "Java", "Go"];
#
# Crie uma função chamada existeLinguagem().
#
# Ela deve receber:
# - Um array de linguagens.
# - Uma string com o nome procurado.
#
# Retorne true se a linguagem existir no array.
# Caso contrário, retorne false.
#
# Utilize in_array() com comparação estrita.
$linguagens = ["PHP", "Python", "Java", "Go"];
function existeLinguagem(array $linguagens, string $procura){
    $procura_formatada = strtolower(trim($procura));
    $linguagens_formatadas = array_map(function($item)
    {
        return strtolower(trim($item));
    }, $linguagens);
    return in_array($procura_formatada, $linguagens_formatadas, true);
}
if(existeLinguagem($linguagens, "PHP")){
    echo "linguagem encontrada";
}else{
    echo "linguagem não encontrada";
}
# EXERCÍCIO 04 - DIVIDIR NOMES
# Considere a string:
#
# $nomes = "Vitor,Paulo,Carlos,Ana";
#
# Utilize explode() para transformá-la
# em um array de nomes.
#
# Depois, percorra o array com foreach
# e exiba um nome por linha.
$nomes = "Vitor,Paulo,Carlos,Ana";
$nomes_list = explode(",",$nomes);
foreach($nomes_list as $nome){
    echo $nome . "\n";
}

# EXERCÍCIO 05 - TOTAL DE COMPRAS
# Considere o array:
#
# $compras = [120.50, 89.90, 45.00, 200.00];
#
# Crie uma função chamada calcularTotalCompras().
#
# Ela deve receber o array de valores
# e retornar o total das compras.
#
# Utilize array_sum().
# Exiba o resultado com duas casas decimais.
$compras = [120.50, 89.90, 45.00, 200.00];
function calcularTotalCompras(array $valores): float{
    return array_sum($valores);
}
printf("Total: %.2f\n", calcularTotalCompras($compras));

# DESAFIO 06 - BUSCA DE USUÁRIOS
# Considere o array:
#
# $usuarios = [
#     ["nome" => "Vitor", "ativo" => true],
#     ["nome" => "Paulo", "ativo" => false],
#     ["nome" => "Carlos", "ativo" => true],
#     ["nome" => "Ana", "ativo" => true]
# ];
#
# Crie uma função chamada buscarUsuariosAtivos().
#
# Ela deve receber um array de usuários
# e retornar um novo array contendo apenas
# os usuários ativos.
#
# Utilize array_filter().
#
# Depois, utilize foreach para exibir
# o nome de cada usuário ativo.
#
# Resultado esperado:
# Vitor
# Carlos
# Ana

$usuarios = [
["nome" => "Vitor", "ativo" => true],
["nome" => "Paulo", "ativo" => false],
["nome" => "Carlos", "ativo" => true],
["nome" => "Ana", "ativo" => true]
];

function buscarUsuariosAtivos(array $usuarios): array{
    return array_filter($usuarios, function($usuario){
        return $usuario['ativo'] === true;
    });
}
$usuariosAtivos = buscarUsuariosAtivos($usuarios);
foreach ($usuariosAtivos as $usuario){
    echo "Usuarios ativo: " . $usuario["nome"] . "\n";
}
