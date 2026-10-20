<?php

# AVALIAÇÃO PRÁTICA 01 - SISTEMA DE GESTÃO DE ALUNOS
#
# Desenvolva um mini sistema escolar utilizando PHP puro.
#
# FUNCIONALIDADE 01 - LISTAR ALUNOS
# Exibir nome, nota e situação de todos os alunos.
# Nota >= 7: Aprovado.
# Nota < 7: Reprovado.
#
# FUNCIONALIDADE 02 - BUSCAR ALUNO
# Buscar um aluno pelo ID.
# Informar caso o aluno não exista.
#
# FUNCIONALIDADE 03 - MÉDIA GERAL
# Calcular a média das notas da turma.
# Tratar o caso de uma turma vazia.
#
# FUNCIONALIDADE 04 - LISTAR APROVADOS
# Exibir apenas os alunos com nota >= 7.
#
# FUNCIONALIDADE 05 - ATUALIZAR NOTA
# Atualizar a nota de um aluno utilizando o ID.
# Aceitar apenas notas entre 0 e 10.
# Não modificar dados caso o aluno não exista.
#
# REGRAS:
# - Utilizar PHP puro, sem Laravel.
# - Organizar as operações em funções.
# - Não utilizar classes ou banco de dados.
# - Não utilizar IA para gerar as soluções.
# - Demonstrar o funcionamento com os dados de teste.
# - Você decide os nomes, parâmetros e retornos das funções.

$alunos = [
    ["id" => 1, "nome" => "Ana", "nota" => 8.5],
    ["id" => 2, "nome" => "Carlos", "nota" => 4.0],
    ["id" => 3, "nome" => "Paulo", "nota" => 7.0],
    ["id" => 4, "nome" => "Maria", "nota" => 6.5]
];

// Desenvolva sua solução abaixo.
# FUNCIONALIDADE 01 - LISTAR ALUNOS
function listarAlunos(array $alunos):array{
    $alunos_lista = [];
    foreach ($alunos as $aluno){
        $situacao = "Reprovado";
        if ($aluno["nota"] >= 7){
            $situacao = "Aprovado";
        }
        $alunos_lista[] = "Nome: " . $aluno["nome"] . ", nota: " . $aluno["nota"]. ", situação: " . $situacao . "\n";
    }
    return $alunos_lista;
}
print_r(listarAlunos($alunos));

# FUNCIONALIDADE 02 - BUSCAR ALUNO
function buscarAluno(array $alunos, int $id){
    foreach ($alunos as $aluno){
        if($aluno["id"] === $id){
            return "Nome: " . $aluno["nome"] . ", nota: ". $aluno["nota"]; 
        }
    }
}

echo buscarAluno($alunos, 1);