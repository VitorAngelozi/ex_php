<?php

# AULA 02 - CONDICIONAIS E OPERADORES DE COMPARAÇÃO

# EXERCÍCIO 01 - PAR OU ÍMPAR
# Crie uma variável $numero e descubra se ela representa
# um número par ou ímpar.
# Exiba o resultado.
# Dica: utilize o operador % (resto da divisão).
$numero = 2;
function par_impar(string $num){
    if ($num % 2 == 0){
        return true;
    }else{
        return false;
    }
}
if (par_impar($numero)){
    echo "Par!\n";
}else{
    echo "Impar!\n";
}

# EXERCÍCIO 02 - SISTEMA DE NOTAS
# Crie uma variável $nota, de 0 a 10.
# Implemente as seguintes regras:
#
# - Nota maior ou igual a 7: Aprovado
# - Nota de 5 até menos de 7: Recuperação
# - Nota abaixo de 5: Reprovado
# - Nota menor que 0 ou maior que 10: Nota inválida
#
# Exiba a situação do aluno.

$nota = 10;
function situacao(float $nota){
    if ($nota >=7 ){
        return "Aprovado!\n";
    }elseif($nota >= 5){
        return "Recuperação\n";
    }else{
        return "Reprovado\n";
    }
}
echo situacao($nota);


# EXERCÍCIO 03 - LOGIN SIMPLIFICADO
# Considere as seguintes credenciais cadastradas:
#
# $emailCadastrado = "admin@teste.com";
# $senhaCadastrada = "123456";
#
# Crie duas variáveis representando o email e a senha
# informados pelo usuário.
#
# Regras:
# - Se o email E a senha estiverem corretos:
#   Exibir "Login realizado com sucesso"
#
# - Caso contrário:
#   Exibir "Credenciais inválidas"
#
# Utilize o operador === para comparar os valores.
# Dica: utilize o operador lógico &&.
#
# Observação: este exercício é apenas para praticar lógica.
# Em sistemas reais, senhas não devem ser armazenadas
# diretamente em texto puro.