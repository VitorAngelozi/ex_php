<?php

# AULA 07 - ORIENTAÇÃO A OBJETOS (PARTE 1)

# EXERCÍCIO 01 - CLASSE PESSOA
#
# Crie uma classe chamada Pessoa.
#
# A classe deverá possuir duas propriedades:
# - nome (string)
# - idade (int)
#
# Crie um método chamado apresentar().
# Ele deverá exibir:
#
# "Meu nome é Vitor e tenho 22 anos."
#
# Crie dois objetos diferentes da classe Pessoa.
# Preencha as propriedades de cada objeto.
# Chame o método apresentar() para ambos.
#
# Neste exercício, não utilize construtor.
class Pessoa{
    public string $nome;
    public int $idade;

    public function __construct(string $nome, int $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar():void{
        echo "Meu nome e {$this->nome}, e tenho {$this->idade}";
    }
}
$pessoa1 = new Pessoa("Vitor", 22);
$pessoa1->apresentar();

# EXERCÍCIO 02 - CLASSE PRODUTO
#
# Crie uma classe chamada Produto.
#
# Propriedades:
# - nome (string)
# - preco (float)
#
# Utilize __construct() para receber
# o nome e o preço do produto.
#
# Crie um método chamado aplicarDesconto().
# Ele deve receber um percentual de desconto.
#
# O método deverá calcular e retornar
# o preço com o desconto aplicado.
#
# Exemplo:
# Produto: Mouse
# Preço: 100
# Desconto: 10%
# Resultado: 90
#
# Não altere o preço original do objeto.
# Apenas retorne o preço com desconto.


# EXERCÍCIO 03 - CLASSE ALUNO
#
# Crie uma classe chamada Aluno.
#
# Utilize o construtor para receber:
# - nome (string)
# - nota1 (float)
# - nota2 (float)
#
# Crie um método chamado calcularMedia().
# Ele deverá retornar a média das duas notas.
#
# Crie outro método chamado verificarAprovacao().
# Ele deverá retornar true se a média for >= 7.
# Caso contrário, retornar false.
#
# Fora da classe, crie um objeto Aluno.
# Exiba o nome, a média e a situação do aluno.
#
# Dica: um método pode chamar outro
# método da mesma classe utilizando $this.


# DESAFIO 04 - CLASSE CARTEIRA
#
# Crie uma classe chamada Carteira.
#
# Utilize o construtor para receber:
# - titular (string)
# - saldo (float)
#
# Crie um método depositar().
# Ele deverá receber um valor e adicioná-lo ao saldo.
#
# Regras:
# - Não permitir depósito de valor <= 0.
# - Se o depósito for válido, atualizar o saldo.
#
# Crie também um método consultarSaldo().
# Ele deverá retornar o saldo atual.
#
# Teste:
# Carteira de Vitor com saldo inicial de 100.
# Depositar 50.
# O saldo deverá passar para 150.
#
# Tente também depositar -20.
# O saldo deverá continuar em 150.
# Não implemente transferências ainda