
<?php

# AULA 11 - INTRODUÇÃO A TESTES AUTOMATIZADOS
#
# OBJETIVO:
# Aprender a escrever verificações automáticas
# para funções e regras de negócio.
#
#
# EXERCÍCIO 01 - FUNÇÃO DE VERIFICAÇÃO
#
# Crie uma função chamada verificar().
#
# Parâmetros:
# - bool $condicao
# - string $descricao
#
# Retorno:
# - void
#
# REGRAS:
# - Se a condição for verdadeira, exibir:
#   "PASSOU: descrição"
#
# - Se a condição for falsa, exibir:
#   "FALHOU: descrição"
#
# TESTES:
# verificar(10 > 5, "10 é maior que 5")
# verificar(3 === 5, "3 é igual a 5")
#
# RESULTADO ESPERADO:
# PASSOU: 10 é maior que 5
# FALHOU: 3 é igual a 5
#

function verificar(bool $condicao, string $descricao):void{
	if($condicao){
		echo "Passou: {$descricao}\n";
		return;
	}
	echo "Falhou: {$descricao}\n";
}
verificar(10 > 5, "10 é maior que 5");
verificar(3 === 5, "3 é igual a 5");


# EXERCÍCIO 02 - VALIDANDO SAQUES
#
# Crie uma função chamada podeSacar().
#
# Parâmetros:
# - float $saldo
# - float $valor
#
# Retorno:
# - bool
#
# REGRAS:
# - O saque precisa ser maior que zero.
# - O saque não pode ultrapassar o saldo.
# - Se as duas regras forem atendidas,
#   retorne true.
# - Caso contrário, retorne false.
#
# Utilize sua função verificar()
# para testar os seguintes cenários:
#
# 1. Saldo 100, saque 50 -> true.
# 2. Saldo 100, saque 100 -> true.
# 3. Saldo 100, saque 150 -> false.
# 4. Saldo 100, saque 0 -> false.
# 5. Saldo 100, saque -30 -> false.
#
# IMPORTANTE:
# Não utilize apenas echo ou var_dump
# para mostrar o retorno da função.
#
# Utilize verificar() para comparar
# o resultado real com o esperado.

function podeSacar(float $saldo, float $valor):bool{
	if ($valor >= 0 && $valor >= $saldo){
		return true;
	}
	return false;
}
verificar(podeSacar(100, 50),"saldo 100 maior que 50");
verificar(podeSacar(100, 100), "saldo 100 igual a 100");
verificar(podeSacar(100, 150), "saldo 100 menor que 150");
verificar(podeSacar(100, 0), "saldo 100 maior que 0");
verificar(podeSacar(100, -30), "saldo 100 maior que -30");
#
# EXERCÍCIO 03 - TESTANDO UMA CARTEIRA
#
# Crie uma classe chamada Carteira.
#
# Propriedade privada:
# - saldo (float)
#
# O construtor recebe o saldo inicial.
#
# Métodos:
# - consultarSaldo(): float
# - depositar(float $valor): void
# - sacar(float $valor): void
#
# REGRAS:
# - Saldo inicial negativo deve lançar exceção.
# - Depósitos menores ou iguais a zero
#   devem lançar exceção.
# - Saques menores ou iguais a zero
#   devem lançar exceção.
# - Saques acima do saldo devem lançar exceção.
#
# Utilize verificar() para conferir:
#
# 1. Saldo inicial 100.
# 2. Depositar 50 -> saldo 150.
# 3. Sacar 30 -> saldo 120.
# 4. O saldo permanece 120 após uma
#    tentativa inválida de saque.
#
# EXTRA:
# Pense em como testar automaticamente
# se determinada operação lançou a exceção
# que você esperava.
#
# Não precisa implementar o extra agora.