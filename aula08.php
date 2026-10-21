<?php

# AULA 08 - ENCAPSULAMENTO EM PHP

# EXERCÍCIO 01 - PRODUTO PROTEGIDO
#
# Crie uma classe chamada Produto.
#
# Propriedades privadas:
# - nome (string)
# - preco (float)
#
# Utilize um construtor para receber os dados.
#
# Crie os métodos:
# - getNome(): string
# - getPreco(): float
# - alterarPreco(float $novoPreco): bool
#
# Regras:
# - O preço não pode ser negativo.
# - Se o preço informado for válido, atualize-o.
# - O método alterarPreco() deve retornar
#   true em caso de sucesso e false caso contrário.
# - Valide também o preço recebido no construtor.
#   Para este exercício, se for inválido,
#   lance uma InvalidArgumentException.
#
# Teste:
# Produto: Mouse, preço inicial 100.
# Alterar para 150 -> permitido.
# Alterar para -50 -> rejeitado.
# O preço deverá permanecer em 150.
#
# Dica: InvalidArgumentException é uma classe
# de exceção nativa do PHP.
class Produto{
    private string $nome;
    private float $preco;
    
    public function __construct(string $nome, float $preco){
        $this->nome = $nome;
        if($preco< 0){
            throw new InvalidArgumentException("Preco deve ser maior ou igual a zero");
        }
        $this->preco = $preco;
    }
    public function getNome():string{
        return $this->nome;
    }
    public function getPreco():float{
        return $this->preco;
    }
    public function alterarPreco(float $novoPreco): bool{
        if($novoPreco<= 0){
            throw new InvalidArgumentException("Preco deve ser maior ou igual a zero");
        }
        $this->preco = $novoPreco;
        return true;
    }
}

$mouse = new Produto("Mouse", 100);
echo $mouse->getNome() . "\n";
echo $mouse->getPreco() . "\n";
$mouse->alterarPreco(100) ."\n";
echo $mouse->getPreco() . "\n";
#echo $mouse->alterarPreco(-50) . "\n";
#echo $mouse->getPreco() . "\n";


# EXERCÍCIO 02 - CONTADOR
#
# Crie uma classe chamada Contador.
#
# Propriedade privada:
# - valor (int), começando em zero.
#
# Crie os métodos:
# - incrementar(): void
# - decrementar(): void
# - consultarValor(): int
#
# Regras:
# - incrementar() adiciona 1.
# - decrementar() subtrai 1.
# - O contador nunca pode ficar negativo.
#
# Teste:
# Incrementar duas vezes -> 2.
# Decrementar uma vez -> 1.
# Decrementar duas vezes -> 0.
# O segundo decremento não deve deixar
# o valor negativo.
class Contador{
    private int $valor = 0;
    public function incrementar():void{
        $this->valor += 1;
        return;
    }
    public function decrementar():void{
        if($this->valor > 0){
            $this->valor -= 1;
            return;
        }
        return;
    }
    public function consultarValor(): int{
        return $this->valor;
    }
}
$contador= new Contador();
$contador->incrementar();
echo $contador->consultarValor() ."\n";
$contador->decrementar();
echo $contador->consultarValor() ."\n";
$contador->decrementar();
echo $contador->consultarValor()."\n";


# EXERCÍCIO 03 - ALUNO E NOTAS
#
# Crie uma classe chamada Aluno.
#
# Propriedades privadas:
# - nome (string)
# - nota1 (float)
# - nota2 (float)
#
# Receba os valores pelo construtor.
#
# Crie os métodos:
# - getNome(): string
# - calcularMedia(): float
# - verificarAprovacao(): bool
# - alterarNota1(float $nota): bool
#
# Regras:
# - Notas devem estar entre 0 e 10.
# - Valide as notas no construtor também.
#   Se forem inválidas, lance
#   uma InvalidArgumentException.
# - alterarNota1() só deve modificar a nota
#   se ela estiver entre 0 e 10.
# - A aprovação exige média >= 7.
#
# Teste:
# Aluno com notas 8 e 6.
# Média inicial: 7.
# Alterar nota1 para 4.
# Nova média: 5.
# Situação: reprovado.
# Tentar alterar nota1 para 15.
# A nota deverá permanecer 4.


# DESAFIO 04 - CARTEIRA SEGURA
#
# Crie uma classe chamada Carteira.
#
# Propriedades privadas:
# - titular (string)
# - saldo (float)
#
# Utilize o construtor para receber
# o titular e o saldo inicial.
#
# Crie os métodos:
# - getTitular(): string
# - consultarSaldo(): float
# - depositar(float $valor): bool
# - sacar(float $valor): bool
#
# Regras:
# - O saldo inicial não pode ser negativo.
# - Se for negativo, lance
#   uma InvalidArgumentException.
# - Depósitos devem ter valor maior que zero.
# - Saques devem ter valor maior que zero.
# - Não permitir saque acima do saldo disponível.
# - Operações inválidas não alteram o saldo.
#
# TESTES:
# Saldo inicial: 100.
# Depositar 50 -> saldo 150.
# Sacar 30 -> saldo 120.
# Tentar sacar 200 -> operação recusada.
# Saldo permanece 120.
# Tentar depositar -10 -> operação recusada.
# Saldo permanece 120.
#
# REGRAS ADICIONAIS:
# - Não crie um método setSaldo().
# - Não modifique as propriedades diretamente
#   fora da classe.
# - Não utilize Laravel.
# - Ainda não implemente transferências.
#
# OBSERVAÇÃO:
# Nesta aula usamos float para praticar POO.
# Em sistemas financeiros reais, precisamos
# de representação monetária apropriada,
# controle transacional e outras garantias.