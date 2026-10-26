<?php

# AVALIAÇÃO PRÁTICA 02 - SISTEMA DE PEDIDOS
#
# OBJETIVO:
# Desenvolver um sistema simples de gerenciamento
# de pedidos utilizando PHP puro e orientação a objetos.
#
# CONTEXTO:
# Uma loja precisa de um sistema para registrar,
# confirmar e cancelar pedidos.
#
# Cada pedido possui:
# - Número
# - Nome do cliente
# - Valor
# - Situação
#
#
# REGRAS DE NEGÓCIO:
#
# 1. Todo pedido deve começar como "pendente".
#
# 2. Pedidos com valor menor ou igual a zero
#    não podem ser criados.
#
# 3. Um pedido pendente pode ser confirmado.
#
# 4. Um pedido confirmado não pode ser
#    confirmado novamente.
#
# 5. Um pedido pendente pode ser cancelado.
#
# 6. Um pedido cancelado não pode ser confirmado.
#
# 7. Quando um pedido for confirmado,
#    o cliente deverá receber uma notificação.
#
# 8. O sistema deverá permitir notificações
#    por email e SMS.
#
# 9. Operações inválidas devem lançar exceções.
#
# 10. As propriedades dos pedidos devem
#     estar protegidas por encapsulamento.
#
#
# CENÁRIOS DE TESTE:
#
# TESTE 01:
# Criar pedido de R$ 150.
# Resultado esperado: Pendente.
#
# TESTE 02:
# Confirmar o pedido de R$ 150.
# Resultado esperado: Confirmado.
# Uma notificação deve ser enviada.
#
# TESTE 03:
# Tentar confirmar novamente o mesmo pedido.
# Resultado esperado: Exceção.
#
# TESTE 04:
# Tentar criar um pedido de R$ -20.
# Resultado esperado: Exceção.
#
# TESTE 05:
# Criar um novo pedido de R$ 80.
# Resultado esperado: Pendente.
#
# TESTE 06:
# Cancelar o pedido de R$ 80.
# Resultado esperado: Cancelado.
#
# TESTE 07:
# Tentar confirmar o pedido cancelado.
# Resultado esperado: Exceção.
#
#
# REQUISITOS TÉCNICOS:
#
# - Utilizar PHP puro.
# - Utilizar orientação a objetos.
# - Utilizar propriedades privadas.
# - Utilizar construtores quando necessário.
# - Utilizar pelo menos uma interface.
# - Utilizar composição.
# - Utilizar try/catch.
# - Declarar os tipos dos parâmetros e retornos.
# - Evitar repetição desnecessária de código.
# - Não utilizar Laravel.
# - Não utilizar banco de dados.
#
#
# ETAPA 01 - PLANEJAMENTO
#
# Antes de implementar, responda em comentários:
#
# 1. Quais classes você pretende criar?
#
# Resposta: pedidos e notificador email e sms
#
# 2. Quais interfaces você pretende criar?
#
# Resposta: interface de notificador
#
#
# 3. Qual será a responsabilidade de cada classe?
#
# Resposta: a classe de pedidos vai ficar responsavel pela logica e validacao de produtos, as classes
# de notificacao pela notificacao individual
#
#
# 4. Como você impedirá que um pedido confirmado
#    seja confirmado novamente?
#
# Resposta: confirmar se ele ja esta confirmado. se tiver, nao,
#
#
# ETAPA 02 - IMPLEMENTAÇÃO
#
# Após planejar, implemente sua solução abaixo.
#
# Não existe uma quantidade obrigatória de classes.
# Decida como organizar seu sistema.
#
# IMPORTANTE:
# Tente resolver sozinho, utilizando o conhecimento
# adquirido nas aulas anteriores.
#
# Não precisa desenvolver uma arquitetura perfeita.
# O objetivo é avaliar sua capacidade de transformar
# regras de negócio em código funcional.
#
#
# ETAPA 03 - TESTES
#
# Execute todos os sete cenários descritos acima.
#
# Verifique se:
# - Os estados dos pedidos estão corretos.
# - Pedidos inválidos são rejeitados.
# - As exceções são tratadas.
# - As notificações são enviadas corretamente.
# - Pedidos inválidos não são confirmados.
#
#
# DESAFIO EXTRA (OPCIONAL):
#
# Tente impedir que um pedido cancelado
# seja cancelado novamente.
#
# Pense se isso deveria retornar false
# ou lançar uma exceção, considerando
# as regras que você definiu.
#
#
# BOA SORTE!
#
# Esta avaliação será utilizada para verificar
# sua autonomia em PHP e orientação a objetos.
# Não vou avaliar apenas se o código funciona,
# mas também suas decisões de implementação.

# Cada pedido possui:
# - Número
# - Nome do cliente
# - Valor
# - Situação


interface Notificador{
    public function enviar($string):void;

}

class NotificadorEmail implements Notificador {
    public function enviar(string $mensagem): void {
        // A própria classe adiciona o texto do canal antes da mensagem!
        echo "Email " . $mensagem . "\n";
    }
}

class NotificadorSms implements Notificador {
    public function enviar(string $mensagem): void {
        // A mesma coisa aqui, mudando para SMS
        echo "SMS " . $mensagem . "\n";
    }
}

class Pedido{
    private int $numero;
    private string $nomeCliente;
    private float $valor;
    private string $situacao = "pendente";
    private Notificador $notificador;

    public function __construct(int $numero, string $nomeCliente, float $valor, Notificador $notificador{
        if ($valor <= 0){
            throw new InvalidValueError("Valor não pode ser igual ou menos a zero");            
        }

        $this->numero       = $numero;
        $this->nomeCliente  = $nomeCliente;
        $this->valor        = $valor;
        $this->notificador  = $notificador;
    }

    public function confirmar(){
        if ($this->situacao != "pendente"){
            throw new InvalidValueError("Situação não se encontra como pendente!");
        }
        $this->situacao = "confimado";

    }

    public function cancelar(){
        if ($this->situacao != "pendente"){
            throw new InvalidValueError("Situação não se encontra como pendente!")
        }
        $this->situacao = "cancelado";
    }

# 1. Todo pedido deve começar como "pendente". - ok
#
# 2. Pedidos com valor menor ou igual a zero
#    não podem ser criados.
#
# 3. Um pedido pendente pode ser confirmado.
#
# 4. Um pedido confirmado não pode ser
#    confirmado novamente.
#
# 5. Um pedido pendente pode ser cancelado.
#
# 6. Um pedido cancelado não pode ser confirmado.
#
# 7. Quando um pedido for confirmado,
#    o cliente deverá receber uma notificação.
#
# 8. O sistema deverá permitir notificações
#    por email e SMS.
#
# 9. Operações inválidas devem lançar exceções.
#
# 10. As propriedades dos pedidos devem
#     estar protegidas por encapsulamento.